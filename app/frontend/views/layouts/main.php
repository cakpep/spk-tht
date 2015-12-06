<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use yii\bootstrap\Modal;
use frontend\assets\AppAsset;
use frontend\widgets\Alert;
use yii\widgets\Pjax;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
    <?php $this->beginBody() ?>
     <?php
            Modal::begin([
                'id' => 'myModal',
                'header' => '<h4 class="modal-title">...</h4>',
                'closeButton' => [
                      'label' => 'Close',
                      'class' => 'btn btn-danger btn-sm pull-right',                  
                    ],
                'size' => 'modal-lg',
            ]);       
                         
            echo '...';
             
            Modal::end();
        ?>
     
    <div class="wrap">        
    <?php Pjax::begin(['id' => 'cp-pjax']) ?>    
        <?php
            NavBar::begin([
                'brandLabel' => '<i class=\'glyphicon glyphicon-leaf\'></i> Sistem Pakar',
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'navbar-inverse',// navbar-fixed-top',
                ],
            ]);
            $menuItems[] = ['label' => 'Home', 'url' => ['/site/index']];
            $menuItems[] = ['label' => 'Tentang Kami', 'url' => ['/site/about']];
            $menuItems[] = ['label' => 'Hubungi Kami', 'active'=>in_array(Yii::$app->controller->id,['contact']),'url' => ['/site/contact']];
                            
                        
            if (Yii::$app->user->isGuest) {
                $menuItems = [
                            ['label' => 'Daftar', 'url' => ['/site/signup']],
                            ['label' => 'Login', 'url' => ['/site/login']],                            
                        ];
            } else {
                $menuItems = [
                    ['label' => 'Diagnosa', 'items' => [
                        ['label' => 'Diagnosa',  'url' => ['/diagnosa-user/diagnosa']],                                                
                        ['label' => 'Rekam Diagnosa', 'url' => ['/diagnosa-user']],                                                
                    ]],
                    ['label' =>  Yii::$app->user->identity->username , 'items' => [
                            ['label' => 'Profil',  'url' => ['/profil']],
                            ['label' => 'Password', 'url' => ['/profil/password']],
                            ['label' => 'Logout (' . Yii::$app->user->identity->username . ')',
                                'url' => ['/site/logout'],
                                'linkOptions' => ['data-method' => 'post']
                            ],
                        ]],
                    ];
                /*$menuItems[] = [
                    'label' => 'Logout (' . Yii::$app->user->identity->username . ')',
                    'url' => ['/site/logout'],
                    'linkOptions' => ['data-method' => 'post']
                ];*/
            }
            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                'items' => $menuItems,
            ]);
            NavBar::end();
        ?>

            <div id="pjax-loader"></div>
            <div class="container" id="pjax-isi" >
            
                

            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
            
            <?= Alert::widget() ?>
            
            
            <?= $content ?>

            </div>                
            <?php Pjax::end() ?>
        
    </div>
    


    <footer class="footer">
        <div class="container-fluid">
        <p class="pull-left">&copy; CpDev alpha 2.1 <?= date('Y') ?></p>
        <p class="pull-right"><?= Yii::powered() ?></p>
        </div>
    </footer>

    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
