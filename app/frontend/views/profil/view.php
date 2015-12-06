<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\Url;

$this->title = $model->nama;
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="row">
        <div class="col-md-12">         
            <div class="col-sm-12">
                <div class="col-sm-8">
                    <h2><i class="glyphicon glyphicon-user"></i> <?= $model->nama ?></h2>
                    <div class="col-md-8">
                        <?= DetailView::widget([
                            'model' => $model,
                            'options'=>['class' => 'table table-striped'],
                            'attributes' => [
                                [
                                    'attribute'=>'agama_id', 
                                    'label'=>'Tempat,Tanggal Lahir',
                                    'value'=>$model->tempat_lahir.', '.date('d M Y',strtotime($model->tgl_lahir)),
                                ],
                                [
                                    'attribute'=>'agama_id', 
                                    'label'=>'Agama',
                                    'value'=>$model->agama->name,
                                ],
                                [
                                    'attribute'=>'jenkel', 
                                    'label'=>'Jenis Kelamin',
                                    'value'=>$model->jenkel=='L'?'Laki-Laki':'Perempuan',
                                ],
                                'tinggi_badan',
                                'berat_badan',                                
                                [
                                    'attribute'=>'no_telp', 
                                    'label'=>'Berat Ideal',
                                    'value'=>$model->beratIdeal(),
                                ],
                                'no_telp',                                 
                                'alamat',
                            ],
                        ]) ?>

                    </div>
                    


                </div>             
                <div class="col-sm-4 text-center" >
                    <div class="row" style="padding-left:70px">
                        <?php 
                            $gbr=!empty($model->foto)?$model->foto:'images.png';
                            echo  '<img src=uploads/foto_profil/'.$gbr.' alt="" class="img-circle img-responsive" />';
                        ?>
                    </div>                    
                </div>
                <div class="col-sm-8" >

                </div>
                <div class="col-sm-4" >
                    <div class="row">                        
                        <?= Html::a('<i class="glyphicon glyphicon-edit"></i> Update Profil', ['update-profil'], ['class' => 'btn btn-primary btn-block']) ?>                         
                    </div>
                </div>
            </div>                        
        </div>
    </div>