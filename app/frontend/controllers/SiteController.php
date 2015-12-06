<?php
namespace frontend\controllers;

use Yii;
use common\models\LoginForm;
use common\models\Artikel;
use app\models\ArtikelSearch;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public $successUrl = '';

    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    public function beforeAction($action) {
        
        $this->enableCsrfValidation = false;
        
        return parent::beforeAction($action);
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [        
            'auth' => [
                'class' => 'yii\authclient\AuthAction',
                'successCallback' => [$this, 'successCallback'],
                'successUrl' => $this->successUrl

            ],
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function successCallback($client)
    {
         $attributes = $client->getUserAttributes();
        
        $user = \common\models\User::find()
            ->where([
                'email'=>$attributes['email'],
            ])
            ->one();

        if(!empty($user)){
            Yii::$app->user->login($user);
        }
        else{
            //Simpen disession attribute user dari Google
            $session = Yii::$app->session;
            $session['attributes']=$attributes;
            // redirect ke form signup, dengan mengset nilai variabell global successUrl
            $this->successUrl = \yii\helpers\Url::to(['signup']);
        }   
    }

    public function actionIndex()
    {
        $searchModel = new ArtikelSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'mostComment'=>$searchModel->komentarTerbanyak(20),
        ]);
    }

    public function actionLogin()
    {
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', 'Terima kasih sudah menghubungi kami. Pertanyaan anda akan kami jawab secepatnya.. ');
            } else {
                Yii::$app->session->setFlash('error', 'Maaf pesan gagal dikirim.coba ulangi lagi.');
            }

            return $this->refresh();
        } else {
            return $this->render('contact', [
                'model' => $model,
            ]);
        }
    }

    public function actionInfo($id)
    {   
        $data=\common\models\Info::findOne($id);
        return $this->renderAjax('info',[
                'data'=>$data,
            ]);
    }

    
    public function actionSignup()
    {

        $model = new SignupForm();

        // Tambahkan ini aje.. session yang kita buat sebelumnya, MULAI
        $session = Yii::$app->session;
        if (!empty($session['attributes'])){
            $model->username = $session['attributes']['first_name'];
            $model->email = $session['attributes']['email'];
        }
        // SELESAI

        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->signup()) {

                $email = \Yii::$app->mailer->compose()
                        ->setTo($user->email)
                        ->setFrom([\Yii::$app->params['supportEmail'] => \Yii::$app->name . ' robot'])
                        ->setSubject('Signup Confirmation')
                        ->setTextBody("
                            Selamat !
                            Anda Telah Berhasil Mendaftar di Sistem Pakar metode CF.
                            Untuk Konfirmasi pendaftaran anda klik pada link di bawah ini.
                            ".Yii::$app->urlManager->createAbsoluteUrl(['site/confirm','id'=>$user->id,'key'=>$user->auth_key])
                        )
                        ->send();
                if($email){
                    Yii::$app->getSession()->setFlash('success','Pendaftaran Berhasil. cek kotak masuk pada email anda untuk mengkonfirmasi pendaftaran. Terima Kasih..!! ');
                }
                else{
                    Yii::$app->getSession()->setFlash('warning','Maaf konfirmasi pendaftaran gagal, contact Admin!');
                }
                    return $this->goHome();
                }

        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }


    public function actionConfirm($id, $key)
    {
        $user = \common\models\User::find()->where([
                                                    'id'=>$id,
                                                    'auth_key'=>$key,                                                    
                                                ])->one();
        
        if(!empty($user) && $user->status==10){
         
            Yii::$app->getSession()->setFlash('info','Maaf email anda sudah pernah di konfirmasi. Hubungi administrator untuk informasi yang lebih lanjut.');   
    
        }if(!empty($user) && $user->status==0){

            $user->status=10;
            $user->confirmed_at= time();

            if($user->save())
                Yii::$app->getSession()->setFlash('success','Email Sukses anda Konfirmasi !');            
            else
                Yii::$app->getSession()->setFlash('warning','Maaf konfirmasi email gagal, contact Admin!');
            
        }if(empty($user)){
            Yii::$app->getSession()->setFlash('warning','Failed!');
        }

        return $this->goHome();
    }

    public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->getSession()->setFlash('success', 'Cek Inbox email anda untuk mengikuti langkah selanjutnya.');

                return $this->goHome();
            } else {
                Yii::$app->getSession()->setFlash('error', 'Maaf permintaan reset passwword gagal');
            }
        }

        return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }

    public function actionResetPassword($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidParamException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->getSession()->setFlash('success', 'Password Baru anda Berhasil Di simpan.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }
}
