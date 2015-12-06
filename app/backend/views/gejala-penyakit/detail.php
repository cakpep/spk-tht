<?php
use yii\helpers\Html;
use yii\widgets\DetailView;

?>

<div class="penyakit-gejala-view">
    
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'nama_gejala',
            'ket:ntext',            
        ],
    ]) ?>

    
</div>