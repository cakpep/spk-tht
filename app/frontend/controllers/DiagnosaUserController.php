<?php

namespace frontend\controllers;

use Yii;
use common\models\DiagnosaUser;
use common\models\DiagnosaUserDetil;
use app\models\DiagnosaUserSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\db\Query;

/**
 * DiagnosaUserController implements the CRUD actions for DiagnosaUser model.
 */
class DiagnosaUserController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    public function actionIndex()
    {
        $searchModel = new DiagnosaUserSearch();
        $dataRekam=$searchModel->dataRekamDiagnosa();

        return $this->render('index', [
            'searchModel' => $searchModel,            
            'dataRekam'=>$dataRekam,
        ]);
    }

    
    public function actionDiagnosa()
    {
        $gejala=!empty($_POST['Diagnosa']['proses'])?$_POST['Diagnosa']['proses']:array(0);
        $model = \backend\models\PenyakitGejala::find()->all();
        $diagnosa = new \common\models\Diagnosa();
        $uncertantyTerm = new \common\models\DiagnosaUncertantyTerm();
        $dd=$diagnosa->diagnosaData($gejala); 

        return $this->render('diagnosa', [
            'model' => $model,  
            'diagnosa' =>$diagnosa,
            'dd'=>$dd,
            'hasil'=>$diagnosa->rekapDiagnosa($dd),
            'uncertantyTerm'=>$uncertantyTerm,
        ]);
    }

    public function actionDetilDiagnosa($ke)
    {
        $diagnosa=\common\models\Diagnosa::diagnosaRekam($ke);

        $diagnosaDetil =new DiagnosaUserDetil();

        $searchModel = new DiagnosaUserSearch();
        $searchModel->user_id=Yii::$app->user->id;
        $searchModel->diagnosa_ke=$ke;
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        // $dataRekam=$searchModel->dataRekamDiagnosa();
        $dataRekam=$diagnosaDetil->dataRekamDiagnosa($ke);

        return $this->renderAjax('diagnosa_detil_rekam', [
            'searchModel' => $searchModel,            
            'dataProvider' =>$dataProvider,
            'diagnosa' => $diagnosa,
            'dataRekam'=>$dataRekam,
        ]);
    }
    


    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    public function actionInfo($penyakit)
    {   
        $model= \common\models\Diagnosa::pengobatan($penyakit);
        return $this->renderAjax('info', [
            'model' => $model,
        ]);
    }

    public function actionRekamDiagnosa()
    {
        $model = new DiagnosaUser();
        $modelDetil = new DiagnosaUserDetil();

        $connection = \Yii::$app->db;
        $id=Yii::$app->user->id;

        $diagnosa_ke = $connection->createCommand("SELECT max(diagnosa_ke) FROM diagnosa_user where user_id=$id")->queryScalar();
        $diagnosa_ke = $diagnosa_ke+1;

        if (!empty($_GET['gejala'])) {

            $transaction = \Yii::$app->db->beginTransaction();

            try {
            
                $model = new DiagnosaUser();
                $model->user_id=$id;
                $model->diagnosa_ke=$diagnosa_ke;                
                $model->diagnosa_date=date('Y-m-d H:i:s');
                if($sukses=$model->save()){

                    for ($i=0; $i <count($_GET['gejala']) ; $i++) { 
                        $modelDetil = new DiagnosaUserDetil();
                        $modelDetil->diagnosa_user_id=$model->id;
                        $modelDetil->gejala_id=$_GET['gejala'][$i];

                        if (! ($sukses = $modelDetil->save(false))) {
                            $transaction->rollBack();
                            break;
                        }
                    }

                }
                if ($sukses) {                
                    $transaction->commit();
                    return $this->redirect(['diagnosa']);                
                }
            } catch (Exception $e) {
                    $transaction->rollBack();
            }
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }


    public function actionCreate()
    {
        $model = new DiagnosaUser();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing DiagnosaUser model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing DiagnosaUser model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the DiagnosaUser model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return DiagnosaUser the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = DiagnosaUser::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
