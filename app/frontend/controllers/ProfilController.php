<?php

namespace frontend\controllers;

use Yii;
use common\models\UserProfil;
use common\models\User;
use app\models\ProfilSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

class ProfilController extends Controller
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
        $id=Yii::$app->user->id;
        
        $model=$this->findModel($id);

        if(empty($model)){
            return $this->redirect(['create']);
        }else{
            return $this->render('view', [
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

                $foto->saveAs('uploads/foto_profil/'. $model->foto);
                Yii::$app->session->setFlash('success', 'Upload Sukses');
                return $this->redirect(['index']);    
            }else{
                Yii::$app->session->setFlash('warning', 'Upload Gagal');
            }

        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    public function actionUpdateProfil()
    {
        $id=Yii::$app->user->id;
        $model = $this->findModel($id);

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
                    $foto->saveAs('uploads/foto_profil/'. $model->foto);
                }
                Yii::$app->session->setFlash('success', 'Profil Berhasil Di Update.');
                return $this->redirect(['index']);    
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
                $ganti = User::findOne($id);

                $ganti->password_hash= Yii::$app->security->generatePasswordHash($_POST['ChangePassword']['password']);
                $ganti->auth_key = Yii::$app->security->generateRandomString();
                $ganti->updated_at=time();
                
                if(Yii::$app->security->validatePassword($_POST['ChangePassword']['password_lama'], $ganti->password_hash)==1){
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

   
    protected function findModel($id)
    {
        $model = UserProfil::find()->where(['user_id'=>$id])->one();
        
        return $model;        
    }
}
