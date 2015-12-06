<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<div class="diagnosa-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'penyakit_id') ?>

    <?= $form->field($model, 'gejala_id') ?>

    <?= $form->field($model, 'mb') ?>

    <?= $form->field($model, 'md') ?>
    

    <div class="form-group">
        <?= Html::submitButton('<i class=\"glyphicon glyphicon-search\"></i> Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
