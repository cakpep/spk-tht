<?php
use backend\widgets\Panel;
use yii\helpers\Html;
use yii\helpers\url;

?>

<div class="col-lg-12">
<?php     Panel::begin([
        'title'=>"Selamat Datang",
        'type'=>Panel::TYPE_PRIMARY
    ]);
?>                    
          <?php if (!Yii::$app->user->isGuest) : ?>
            <div class="user-panel">
                <div class="pull-left image">                    
                    <?php 
                        $gbr=!empty(Yii::$app->user->identity->userProfil->foto) ? Url::to('@web').'/../uploads/foto_profil/'.Yii::$app->user->identity->userProfil->foto : Url::to('@web').'/../uploads/foto_profil/images.png';                       
                        echo  '<img src='.$gbr.' alt="" class="img-circle" alt="User Image"/>';
                    ?>
                </div>
                <div class="pull-left info">
                    <p>Hallo, <?= @Yii::$app->user->identity->username ?></p>
                    <a href="#">
                        <i class="glyphicon glyphicon-user"></i> Online
                    </a>
                </div>
            </div>
        <?php endif ?>        

                
        <?= Html::a('<i class="glyphicon glyphicon-hand-right"></i> Selengkapnya', ['/profil-user/me','id'=>Yii::$app->user->id], ['class' => 'btn btn-primary btn-flat btn-block']); ?>
    
<?php Panel::end(); ?>
</div>

<?php  if (Yii::$app->user->can('Administrator')) { ?>

<div class="col-lg-12">
    <?php      
       Panel::begin([
            'title'=>"User",
            'type'=>Panel::TYPE_PRIMARY
        ]);
    ?>                              
            <h3><i class="glyphicon glyphicon-user"></i> <?php echo 'User '.$rekap[0]['users']; ?></h3>
            
            <?= Html::a('<i class="glyphicon glyphicon-hand-right"></i> Selengkapnya', ['/user'], ['class' => 'btn btn-primary btn-flat btn-block']); ?>
        
    <?php Panel::end(); ?>
    </div>
<?php } ?>

<?php  if (\Yii::$app->user->can('Pakar')) { ?>
<div class="col-lg-12">
<?php     Panel::begin([
        'title'=>"Data Pakar",
        'type'=>Panel::TYPE_PRIMARY
    ]);
?>
        
        <h3><i class="glyphicon glyphicon-repeat"></i> <?php echo 'Penyakit :'.$rekap[0]['penyakit']; ?></h3>
        <h3><i class="glyphicon glyphicon-refresh"></i> <?php echo 'Gejala :'.$rekap[0]['penyakit_gejala']; ?></h3>

        <?= Html::a('<i class="glyphicon glyphicon-hand-right"></i> Selengkapnya', ['/penyakit'], ['class' => 'btn btn-primary btn-flat btn-block']); ?>
    
<?php Panel::end(); ?>
</div>
<?php } ?>

<?php  if (\Yii::$app->user->can('Publisher')) { ?>
<div class="col-lg-12">
<?php     Panel::begin([
        'title'=>"Artikel",
        'type'=>Panel::TYPE_PRIMARY
    ]);
?>
    
        <h3><i class="glyphicon glyphicon-tags"></i> <?php echo 'Artikel : '.$rekap[0]['artikel']; ?></h3>
        <h3><i class="glyphicon glyphicon-share-alt"></i> <?php echo 'Komentar :'.$rekap[0]['artikel_komentar']; ?></h3>
      
        <?= Html::a('<i class="glyphicon glyphicon-hand-right"></i> Selengkapnya', ['/artikel'], ['class' => 'btn btn-primary btn-flat btn-block']); ?>
    
<?php Panel::end(); ?>
</div>
<?php } ?>