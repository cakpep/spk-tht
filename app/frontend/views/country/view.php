<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

?>
<div class="country-view" id="animasi">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'countryid',
            'countrycode',
            'countryname',
            'recordstatus',
            [
                'attribute'=>'countryflag',
                'value'=>'/uploads/flag/'.$model->countryflag,
                'format' => ['image',['width'=>'100','height'=>'100']],
            ],
        ],
    ]) ?>

</div>
