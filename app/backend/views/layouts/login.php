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

        <div class="container">    
            <center>                        
                <div class="content">
                    <div class="col-md-4">
                    </div>               
                    <div class="col-md-4">
                        <?= $content ?>
                    </div>               
                    <div class="col-md-4">
                    </div>               
                    
                    
                </div>               
            </center>                         
        </div>
    
    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
