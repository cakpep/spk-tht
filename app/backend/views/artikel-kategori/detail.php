<?php
use yii\helpers\Html;
use yii\widgets\DetailView;

?>

<div class="artikel-kategori-view">
    
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'nama:ntext',
            'ket:ntext',            
        ],
    ]) ?>

    
</div>