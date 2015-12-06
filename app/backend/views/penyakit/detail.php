<?php
use yii\helpers\Html;
use yii\widgets\DetailView;

?>

<div class="penyakit-view">
    
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'nama_penyakit',
            
             [
                'attribute' => 'penyakit_jenis_id',
                'value' =>  !empty($model->penyakitJenis->nama_jenis) ? $model->penyakitJenis->nama_jenis:'-',        
            ],
            
            [
                'attribute' => 'status',
                'value' =>  $model->status($model->status),                
            ],
            [
                'attribute' => 'ket',
                'format'=>'html',
                
            ],
            
        ],
    ]) ?>

    
</div>