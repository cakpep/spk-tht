<?php
use yii\helpers\Html;
use yii\widgets\DetailView;

?>

<div class="penyakit-jenis-view">
    
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'nama_jenis',
            [
                'attribute'=>'status',
                'value'=>$model->status($model->status)
            ]            
        ],
    ]) ?>

    
</div>