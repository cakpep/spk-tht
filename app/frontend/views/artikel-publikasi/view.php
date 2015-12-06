<?php
use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\widgets\Pjax;
use frontend\widgets\Panel;

$this->title = $model->judul;
$artikel_gbr=!empty($model->foto_artikel) ? $model->foto_artikel:'images.png';
?>
<div class="artikel-view">
    <?php Pjax::begin(['id'=>'komentar-pjax']) ?>
    <div class="row">
        <div class="col-sm-12">
            <div class="page-header">
              <h2><i class='glyphicon glyphicon-hand-right'></i> <?= $model->judul ?></h2>
                <div class="panel-content" style="margin:1%; float:right">                
                    <span class="label label-default"><i class="glyphicon glyphicon-user"></i><?php echo $model->user->username; ?></span>
                    <span class="label label-primary"><i class="glyphicon glyphicon-tag"></i><?php echo  $model->kategori->nama; ?></span>
                    <span class="label label-success"><i class="glyphicon glyphicon-calendar"></i><?php echo  date('d-m-Y H:i:s',strtotime($model->creaed_date)); ?></span>                
                </div>
            </div>            
            <div class="panel-content" style="margin:1%">
                <div class="col-sm-4">                                                              
                     <?php echo '<img src='.Url::to('@web').'/adm/uploads/artikel/'.$artikel_gbr.' />'; ?>                                
                </div>
                <?php echo $model->isi; ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">

            <?php 
            $jcoment=count($model->artikelKomentars);

            Panel::begin([
                    'title'=>$jcoment.' Komentar',
                    'type'=>Panel::TYPE_DEFAULT
                ]) ?>
               
                    <div class="actionBox">
                        <ul class="commentList">
                             <?php foreach ($model->artikelKomentars as $value) {  
                                $gbr=!empty($value->user->userProfil->foto)?$value->user->userProfil->foto:'images.png';
                            ?>

                                <li>
                                    <div class="commenterImage">
                                      <?php echo '<img src='.Url::to('@web').'/uploads/foto_profil/'.$gbr.' />'; ?>
                                    </div>
                                    <div class="commentText">                                        
                                        <span class="date sub-text">
                                            <i class='glyphicon glyphicon-user'></i><?php echo $value->user->username;?>
                                            on <?php echo date('d-M-Y H:i:s',strtotime($value->komentar_waktu));?>
                                        </span>
                                        <p class=""><?php echo $value->komentar;?></p> 
                                    </div>
                                </li>                           
                            <?php  } ?>
                        </ul>                 
                    </div>
                
                    
            <?php if (Yii::$app->user->isGuest) { ?>
                    <div class="panel-heading"><i class='glyphicon glyphicon-log-in'></i> Login/Daftar Terlebih Dahulu Untuk Komentar.</div>
            <?php }else{ ?>
                    
                    <?= $this->render('_komentar', [
                        'comment' => $comment,
                    ]);                                         
                 }
                    ?>
            <?php Panel::end(); ?>

        </div>
    </div>
    <div id="infos"></div>
    <?php Pjax::end() ?>
</div>
