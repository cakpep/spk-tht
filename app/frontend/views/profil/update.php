<?php

use yii\helpers\Html;


$this->title = 'Update Profil';
$this->params['breadcrumbs'][] = ['label' => 'Profil', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-profil-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
