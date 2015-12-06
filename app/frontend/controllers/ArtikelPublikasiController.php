<?php

namespace frontend\controllers;

use Yii;
use common\models\Artikel;
use app\models\ArtikelSearch;
use frontend\models\ArtikelKomentar;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ArtikelPublikasiController implements the CRUD actions for Artikel model.
 */
class ArtikelPublikasiController extends Controller
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
        $searchModel = new ArtikelSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    


    public function actionView($id)
    {
        $comment = new ArtikelKomentar();

        if ($comment->load(Yii::$app->request->post())) {
                Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
                
                $comment->artikel_id=$id;
                $comment->user_id= Yii::$app->user->id;;   
                $comment->komentar_oleh=Yii::$app->user->id;
                $comment->komentar_waktu=date('Y-m-d H:i:s');

            if($comment->save()){
                
                  $res = array(
                        'message' => 'Data Berhasil Di Simpan.',
                        'alert'=> 'success',
                        'proses'=>'save',
                        'success' => true,
                        // 'success' => $comment,

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
            return $this->renderAjax('view', [
                'model' => $this->findModel($id),
                'comment'=>$comment,
            ]);
        }
    }


    /*
    public function actionView($id)
    {
        $comment = new ArtikelKomentar();

        if ($comment->load(Yii::$app->request->post())) {
            
            $comment->artikel_id=$id;
            $comment->user_id= Yii::$app->user->id;;   
            $comment->komentar_oleh=Yii::$app->user->id;
            $comment->komentar_waktu=date('Y-m-d H:i:s');

            if($comment->save()){
                Yii::$app->getSession()->setFlash('success', 'Komentar Berhasil Dikirim.');
                return $this->redirect(['site/index']);
            }
        } else {
        
            return $this->renderAjax('view', [
                'model' => $this->findModel($id),
                'comment'=>$comment,
            ]);
        }
    }
    */

    protected function findModel($id)
    {
        if (($model = Artikel::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
    protected function listKomentar($id)
    {
        if (($model = Artikel::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
