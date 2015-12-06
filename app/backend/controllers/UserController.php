<?php

namespace backend\controllers;

use Yii;
use backend\models\UserBackend;
use common\models\UserProfil;
use common\models\AuthAssignment;
use common\models\User;
use app\models\UserSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/* developed by cakpep team contact us on febrimaschut@gmail.com */

class UserController extends Controller
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
        $searchModel = new UserSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionDetailData($id)
    {
        return $this->renderAjax('detail', [
            'model' => $this->findModel($id),
            'profil'=> $this->findProfil($id),
        ]);
    }

    public function actionAddData()
    {
        $model = new UserBackend();
        $auth = new AuthAssignment();

        if ($model->load(Yii::$app->request->post())) {
            Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
            $user = new User();

            $user->username = $_POST['UserBackend']['username'];
            $user->email = $_POST['UserBackend']['email'];
            $user->setPassword('123456');
            $user->generateAuthKey();
            $user->status = 10; 
            
            if($user){
                $auth = new AuthAssignment();
                $auth->item_name=$_POST['AuthAssignment']['item_name'];
                $auth->user_id=17;
                $auth->created_at=1428931496;

                if($auth->save()){
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
                'auth'=>$auth,
            ]);
        }
    }

   

    public function actionUpdateData($id)
    {
        $model =\common\models\User::findOne($id); // $this->findModel($id);
        
        if (Yii::$app->request->post()) {

            Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;

            // $a = $this->findModel($id);
            $model->username=$_POST['User']['username'];
            $model->email=$_POST['User']['email'];
            $model->status=$_POST['User']['status'];

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

    public function actionDelete($id)
    {
        Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;

        if($this->findModel($id)->delete()){
                
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

    public function actionDeleteAll($id)
    {
        Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        
        $idx=explode(',', $id);

        foreach ($idx as $id) {
            $this->findModel($id)->delete();
            $a=1;
        }
            
        if($a){
                
                $res = array(
                    'message' => count($idx).' Data Berhasil Di Hapus.',
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

    
    protected function findModel($id)
    {
        if (($model = UserBackend::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    protected function findProfil($id)
    {
        if (($model = UserProfil::find()->where(['user_id'=>$id])->one())!== null) {
            return $model;
        } else {
            return null;
        }
    }
}
