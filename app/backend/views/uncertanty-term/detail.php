<?php
use yii\helpers\Html;
use yii\widgets\DetailView;

?>

<div class="diagnosa-uncertanty-term-view">
    
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'uncertanty_term',
            'cf',
        ],
    ]) ?>

    
</div>