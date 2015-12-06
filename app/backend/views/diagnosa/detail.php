<?php
use yii\helpers\Html;
use yii\widgets\DetailView;

?>

<div class="diagnosa-view">
    
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            
            [
                'attribute'=>'penyakit_id',                                
                'value'=>  !empty($model->penyakit->nama_penyakit) ?$model->penyakit->nama_penyakit  :'-',                                        
            ],
            
            [
                'attribute'=>'gejala_id',                                
                'value'=>  !empty($model->gejala->nama_gejala) ? $model->gejala->nama_gejala :'-',
            ],
            'mb',
            'md',            
        ],
    ]) ?>

    
</div>