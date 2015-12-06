<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\DiagnosaUser */

$this->title = 'Create Diagnosa User';
$this->params['breadcrumbs'][] = ['label' => 'Diagnosa Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="diagnosa-user-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
