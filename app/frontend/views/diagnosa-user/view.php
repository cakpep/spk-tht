<?php
use yii\helpers\Html;
use yii\widgets\DetailView;

?>
<div class="diagnosa-user-view">

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'user_id',            
            'diagnosa_date',
        ],
    ]) ?>

</div>
