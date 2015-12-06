<?php
use yii\helpers\Html;
use yii\widgets\DetailView;

?>

<div class="penyakit-view">
    
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            [
                'attribute' => 'ket',
                'label'=>false,
                'format'=>'html',
                
            ],
            
        ],
    ]) ?>

    
</div>