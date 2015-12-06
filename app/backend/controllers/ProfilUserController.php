<?php

namespace backend\controllers;

use Yii;
use common\models\UserProfil;
use app\models\UserProfilSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/* developed by cakpep team contact us on febrimaschut@gmail.com */

class ProfilUserController extends Controller
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
        $searchModel = new UserProfilSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionDetailData($id)
    {
        $model=$this->findModel($id);

         if(empty($model)){
            return $this->redirect(['create']);
        }else{
            return $this->renderAjax('detail', [
                'model' => $model,
            ]);            
        }
    }

    public function actionMe()
    {
        $id=Yii::$app->user->id;
        
        $model=$this->findProfil($id);

        if(empty($model)){
            return $this->redirect(['create']);
        }else{
            return $this->render('me', [
                'model' => $model,
            ]);   
        }
    }


    public function actionAddData()
    {
        $model = new UserProfil();

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

     public function actionCreate()
    {
        $model = new UserProfil();

        if ($model->load( Yii::$app->request->post() )) {
            
            $model->user_id=Yii::$app->user->id;
            $model->tgl_lahir= date('Y-m-d',strtotime($_POST['UserProfil']['tgl_lahir']));
            $model->created_at= date('Y-m-d h:i:s');
            
            $foto =  UploadedFile::getInstance($model, 'foto');                                  
            if($foto){
                $ext = end((explode(".", $foto->name)));
                $extt=$foto->extension;
                $model->foto = Yii::$app->security->generateRandomString().".".$extt;
            }

            
            if ($model->save()) {       

                $foto->saveAs('../uploads/foto_profil/'. $model->foto);
                Yii::$app->session->setFlash('success', 'Profil berhasil Di simpan');
                return $this->redirect(['index']);    
            }else{
                Yii::$app->session->setFlash('warning', 'Simpan Gagal');
            }

        } else {
            return $this->render('_formN', [
                'model' => $model,
            ]);
        }
    }

      public function actionUpdateProfil()
    {
        $id=Yii::$app->user->id;
        $model = $this->findProfil($id);

        if (Yii::$app->request->post()) {
            
            // $model->user_id=$_POST['UserProfil'][''];
            $model->nama=$_POST['UserProfil']['nama'];
            $model->jenkel=$_POST['UserProfil']['jenkel'];
            $model->tempat_lahir=$_POST['UserProfil']['tempat_lahir'];
            $model->agama_id=$_POST['UserProfil']['agama_id'];
            $model->tinggi_badan=$_POST['UserProfil']['tinggi_badan'];
            $model->berat_badan=$_POST['UserProfil']['berat_badan'];
            $model->tgl_lahir=date('Y-m-d',strtotime($_POST['UserProfil']['tgl_lahir']));
            $model->alamat=$_POST['UserProfil']['alamat'];
            $model->no_telp=$_POST['UserProfil']['no_telp'];
            

            $model->updated_by=Yii::$app->user->id;
            $model->updated_date= date('Y-m-d h:i:s');
            $foto =  UploadedFile::getInstance($model, 'foto');                                              

            if($foto){
                $extt=$foto->extension;
                $model->foto = Yii::$app->security->generateRandomString().".".$extt;
            }
            
            if ($model->save()) {       
                if($foto){
                    $foto->saveAs('../uploads/foto_profil/'. $model->foto);
                }
                Yii::$app->session->setFlash('success', 'Profil Berhasil Di Update.');
                return $this->redirect(['me']);    
            }else{
                Yii::$app->session->setFlash('warning', 'Profil Gagal di update.');
            }
            
        } else {
            return $this->render('update', [
                'model'=>$model,
            ]);
        }
    }


    public function actionPassword()
    {
            $id=Yii::$app->user->id;
            $model=new \common\models\ChangePassword();

            if (Yii::$app->request->post()) {                
                $ganti = \common\models\User::findOne($id);

                
                
                if(Yii::$app->security->validatePassword($_POST['ChangePassword']['password_lama'], $ganti->password_hash)==1){
                    $ganti->password_hash= Yii::$app->security->generatePasswordHash($_POST['ChangePassword']['password']);
                    $ganti->auth_key = Yii::$app->security->generateRandomString();
                    $ganti->updated_at=time();
                    
                    if($ganti->save())
                    Yii::$app->session->setFlash('success','Password Berhasil Di ganti.');                      
                }else{
                    Yii::$app->session->setFlash('danger','Password Lama anda salah.');                      
                }   
                return $this->redirect(['password']);                       
            } else { 
                return $this->render('password', [
                    'model' => $model,
                ]);
            }
    }
   

    public function actionUpdateData($id)
    {
        $model = $this->findModel($id);

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
        if (($model = UserProfil::findOne($id)) !== null) {
            return $model;
        } else {
            return null;
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
