<?php
use yii\helpers\Html;
use yii\widgets\DetailView;

?>

<div class="agama-view">
    
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            [
                'attribute'=>'status',                                
                'value'=>$model->status==1?'Aktif':'Tidak Aktif',                                                
            ]       
        ],
    ]) ?>

    
</div>