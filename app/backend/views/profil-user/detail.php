<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\DetailView;
?>

<div class="user-profil-view">
    
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',            
            [
                'attribute'=>'user_id',                                
                'value'=>!empty($model->user_id) ? $model->user->username : '-',
            ],
            'nama',
            'jenkel',
            'tempat_lahir',
            
            [
                'attribute'=>'agama_id',                                
                'value'=>!empty($model->agama_id) ? $model->agama->name : '-',
            ],
            'tinggi_badan',
            'berat_badan',
            [
                'attribute'=>'tinggi_badan',  
                'label'=>'Berat Badan Ideal',
                'value'=>$model->beratIdeal(),
            ],
            [
                'attribute'=>'tgl_lahir',                                
                'value'=>date('d M Y',strtotime($model->tgl_lahir)),
            ],
            
            'alamat:ntext',
            'no_telp',
            [
                'attribute'=>'foto',                
                'value'=> !empty($model->foto) ? Url::to('@web').'/../uploads/foto_profil/'.$model->foto : Url::to('@web').'/../uploads/foto_profil/images.png',                       
                'format' => ['image',['width'=>'100','height'=>'100']],
            ],
            
            
        ],
    ]) ?>

    
</div>