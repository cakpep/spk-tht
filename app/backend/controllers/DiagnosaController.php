<?php

namespace backend\controllers;

use Yii;
use common\models\Diagnosa;
use app\models\DiagnosaSearch;
use backend\models\PenyakitGejala;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/* developed by cakpep team contact us on febrimaschut@gmail.com */

class DiagnosaController extends Controller
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
        $searchModel = new DiagnosaSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

     public function actionDiagnosaTht()
    {
        $gejala=!empty($_POST['Diagnosa']['proses'])?$_POST['Diagnosa']['proses']:array(0);
        $model = PenyakitGejala::find()->all();
        $diagnosa = new Diagnosa();
        $dd=$diagnosa->diagnosaData($gejala);
        $uncertantyTerm = new \common\models\DiagnosaUncertantyTerm();



        return $this->render('diagnosa', [
            'model' => $model,  
            'diagnosa' =>$diagnosa,
            'dd'=>$dd,
            'hasil'=>$diagnosa->rekapDiagnosa($dd),
            'uncertantyTerm'=>$uncertantyTerm,
        ]);
    }

    public function actionDetailData($idp, $idg)
    {
        return $this->renderAjax('detail', [
            'model' => $this->findModel($idp, $idg),
        ]);
    }

    public function actionInfo($penyakit)
    {   
         $model= \common\models\Diagnosa::pengobatan($penyakit);
        return $this->renderAjax('info', [
            'model' => $model,
        ]);
    }

    public function actionAddData()
    {
        $model = new Diagnosa();

        if ($model->load(Yii::$app->request->post())) {
            Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
                $model->created_by=Yii::$app->user->id;
                $model->created_date=date('Y-m-d H:i:s');

            if($model->save()){
                
                  $res = array(
                        'message' => 'Data Berhasil Di Simpan.',
                        'alert'=> 'success',
                        'proses'=>'save',
                        'success' => true,
                    );
            }else{
                $res = array(
                    'message' => 'Data Gagal Di Simpan.',
                    'alert'=> 'error',
                    'proses'=>'save',
                    'success' => false,
                );         
            }
            
            return $res;
            \Yii::$app->end();
        } else {
            return $this->renderAjax('create', [
                'model' => $model,
            ]);
        }
    }

   

    public function actionUpdateData($idp, $idg)
    {
        $model = $this->findModel($idp, $idg);

        if ($model->load(Yii::$app->request->post())) {
            Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
                $model->updated_by=Yii::$app->user->id;
                $model->updated_date=date('Y-m-d H:i:s');

            if($model->save()){
                
                  $res = array(
                        'message' => 'Data Berhasil Di Update.',
                        'alert'=> 'success',
                        'proses'=> 'update',
                        'success' => true,
                    );

            }else{
                
                $res = array(
                    'message' => 'Data Gagal Di Update.',
                    'alert'=> 'error',
                    'proses'=>'update',
                    'success' => false,
                );  

            }
            
            return $res;
            \Yii::$app->end();

        } else {
            return $this->renderAjax('update', [
                'model' => $model,
            ]);
        }
    }

    public function actionDelete($idp, $idg)
    {
        Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;

        if($this->findModel($idp, $idg)->delete()){
                
                $res = array(
                    'message' => 'Data Berhasil Di Hapus.',
                    'alert'=> 'success',
                    'proses'=> 'delete',
                    'success' => true,
                );
        }else{
                
                $res = array(
                    'message' => 'Data Gagal Di Hapus.',
                    'alert'=> 'error',
                    'proses'=> 'delete',
                    'success' => false,
                );         
        }
            
        return $res;
        \Yii::$app->end();
    }

    public function actionDeleteAll($idp, $idg)
    {
        Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        
        $idpx=explode(',', $idp);
        $idgx=explode(',', $idg);

        $k=0;
        foreach ($idpx as $id) {
            $this->findModel($idp, $idgx[$k])->delete();
            $a=1;
            $k++;
        }
            
        if($a){
                
                $res = array(
                    'message' => count($idpx).' Data Berhasil Di Hapus.',
                    'alert'=> 'success',
                    'proses'=> 'delete',
                    'success' => true,
                );

        }else{
                
                $res = array(
                    'message' => 'Data Gagal Di Hapus.',
                    'alert'=> 'error',
                    'proses'=> 'delete',
                    'success' => false,
                );         

        }
            
        return $res;
        \Yii::$app->end();
    }

    
    protected function findModel($idp, $idg)
    {
        if (($model = Diagnosa::findOne(['penyakit_id' => $idp, 'gejala_id' => $idg])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
