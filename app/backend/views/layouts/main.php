<?php
use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use yii\bootstrap\Modal;
use yii\widgets\Pjax;
use backend\widgets\Alert;
use mdm\admin\components\MenuHelper;

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
        
    
        <?php
                $navItems=[];
                
                  if (Yii::$app->user->isGuest) {
                    
                  } else {
                        array_push($navItems,
                                ['label' => 'Sign In', 'icon'=>'info-sign',  'url' => ['/site/login']],
                                ['label' => 'Sign Up', 'url' => ['/site/register']]
                            );
                        
                        $navItems=[
                        ['label' => 'Home', 'icon' => 'home', 'url' => ['/site/index']],                       
                        ['label' => Yii::$app->user->identity->username, 'items' => [                    
                                ['label' => 'Profil','icon' => 'question-sign',  'active'=>in_array(Yii::$app->controller->id,['me']), 'url' => ['/profil-user/me']],                               
                                ['label' => 'Ganti Password','icon' => 'question-sign',  'active'=>in_array(Yii::$app->controller->id,['password']), 'url' => ['/profil-user/password']],                               
                                [
                                    'label' => 'Logout (' . Yii::$app->user->identity->username . ')',
                                    'url' => ['/site/logout'],
                                    'linkOptions' => ['data-method' => 'post']
                                ],
                            ]
                        ],

                      ];

                }

            NavBar::begin([
                'brandLabel' => '<i class=\'glyphicon glyphicon-leaf\'></i> Sistem Pakar',
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'navbar-inverse navbar-fixed-top',
                    'style'=>'background-color: #255489; border-color: #255489;',
                ],
                'innerContainerOptions'=>[
                    'class'=>'container-fluid',

                ]
            ]);
            
            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                'items' => $navItems,
            ]);


            NavBar::end();
        ?>
        
        <div class="wrapper row-offcanvas row-offcanvas-left" id="cp-pjax">                            
            <aside class="left-side sidebar-offcanvas">
                <section class="sidebar">
                    <?php if(!empty(Yii::$app->user->identity->username)){ ?>
                    <?= $this->render('left') ?>
                    <?php } ?>
                </section>
            </aside>
            
            <div id="pjax-loader" style="display: none;"></div>

            <aside class="right-side">
                <div style="margin-top:50px">
                <?php Pjax::begin(['id' => 'cp-bckend-content']) ?>

                    <div class="content-header">
                            <?= Breadcrumbs::widget([
                                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                            ]) ?>
                    </div>
                    <div class="content">
                        <div class="box box-info">  
                            <?= $content ?>
                            <?= Alert::widget() ?>
                        </div>
                    </div>
                </div>
                <?php Pjax::end() ?>

            </aside>            
        </div>
            
    <footer class="footer">
        <div class="container">
        <p class="pull-left">&copy; Sistem Pakar <?= date('Y') ?></p>
        <p class="pull-right">cakpepp</p>
        </div>
    </footer>

    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
