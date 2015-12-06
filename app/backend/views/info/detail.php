<?php
use yii\helpers\Html;
use yii\widgets\DetailView;

?>

<div class="info-view">
    
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'judul',
            [
                'attribute'=>'isi',       
                'format'=>'html',                         
                'value'=>$model->isi,                                                
            ],
        ],
    ]) ?>

    
</div>