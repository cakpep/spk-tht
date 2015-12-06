<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\DetailView;

?>

<div class="artikel-view">
    <div class="row">        
        <div class="col-md-8">
            <?= DetailView::widget([
                'model' => $model,
                'attributes' => [
                    'judul',            
                    [
                        'attribute'=>'kategori_id',                                
                        'value'=>$model->kategori->nama,                                                
                    ],
                    [
                        'attribute'=>'isi',       
                        'format'=>'html',                         
                        'value'=>$model->isi,                                                
                    ]
                    
                ],
            ]) ?>
        </div>
        <div class="col-md-4">
            <div class="row">
                <?php echo '<img src='.Url::to('@web').'/uploads/artikel/'.$model->foto_artikel.' alt="" width="200" height="200" />'; ?>
            </div>
                <span class="label label-primary"><i class="glyphicon glyphicon-user"></i> <?php echo $model->created_by ?></span>
                <span class="label label-primary"><i class="glyphicon glyphicon-calendar"></i>Di Posting <?php echo $model->creaed_date ?></span>
                <br>
                <span class="label label-success"><i class="glyphicon glyphicon-user"></i><?php echo $model->updated_by ?></span>
                <span class="label label-success"><i class="glyphicon glyphicon-calendar"></i>Update Posting <?php echo $model->updated_date ?></span>
            <div class="row">        
                <div class="col-md-12">
                    <h3>Komentar Artikel </h3>
                    <ul class="commentList">
                         <?php foreach ($model->artikelKomentars as $value) {  
                            $gbr=!empty($value->user->userProfil->foto)?$value->user->userProfil->foto:'images.png';
                        ?>

                            <li>
                                <div class="commenterImage">
                                  <?php echo '<img src='.Url::to('@web').'/../uploads/foto_profil/'.$gbr.' alt="" width="50" height="50" />'; ?>
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
            </div>
        </div>
    </div>
</div>