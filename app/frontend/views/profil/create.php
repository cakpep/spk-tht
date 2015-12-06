<?php
use yii\helpers\Html;

$this->title = 'Profil';
$this->params['breadcrumbs'][] = ['label' => 'Profil', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-profil-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
