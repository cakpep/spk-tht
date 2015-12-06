<?php
use backend\widgets\Panel;
use yii\helpers\Html;
use yii\helpers\url;

?>
<div class="row">
   
    <div class="col-md-3">

         <?php      
               Panel::begin([
                    'title'=>"User Aktif",
                    'type'=>Panel::TYPE_SUCCESS
                ]);
            ?>                              
        <h3><i class="glyphicon glyphicon-user"></i> <?php echo $rekap[0]['user_aktif']; ?></h3>
        <!-- ?= Html::a('<i class="glyphicon glyphicon-hand-right"></i> Selengkapnya', ['/user'], ['class' => 'btn btn-primary btn-flat btn-block']); ?> -->
        <?php Panel::end(); ?>

    </div>

    <div class="col-md-3">


         <?php      
               Panel::begin([
                    'title'=>"User Tidak Aktif",
                    'type'=>Panel::TYPE_DANGER
                ]);
            ?>                              
        <h3><i class="glyphicon glyphicon-user"></i> <?php echo $rekap[0]['usertidakaktif']; ?></h3>
        <!-- ?= Html::a('<i class="glyphicon glyphicon-hand-right"></i> Selengkapnya', ['/user'], ['class' => 'btn btn-primary btn-flat btn-block']); ?> -->
        <?php Panel::end(); ?>

    </div>
    <div class="col-md-3">


         <?php      
               Panel::begin([
                    'title'=>"User Ada Profilnya",
                    'type'=>Panel::TYPE_PRIMARY
                ]);
            ?>                              
        <h3><i class="glyphicon glyphicon-user"></i> <?php echo $rekap[0]['user_profil']; ?></h3>
        <!-- ?= Html::a('<i class="glyphicon glyphicon-hand-right"></i> Selengkapnya', ['/user'], ['class' => 'btn btn-primary btn-flat btn-block']); ?> -->
        <?php Panel::end(); ?>
    </div>
    <div class="col-md-3">

         <?php      
               Panel::begin([
                    'title'=>"User Belum Isi Profil",
                    'type'=>Panel::TYPE_WARNING
                ]);
            ?>                              
        <h3><i class="glyphicon glyphicon-user"></i> <?php echo $rekap[0]['user_profil_no']; ?></h3>
        <!-- ?= Html::a('<i class="glyphicon glyphicon-hand-right"></i> Selengkapnya', ['/user'], ['class' => 'btn btn-primary btn-flat btn-block']); ?> -->
        <?php Panel::end(); ?>

    </div>

</div>
<div class="row">

   
    

</div>