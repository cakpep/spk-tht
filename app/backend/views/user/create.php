<?php
use yii\helpers\Html;
?>
<div class="user-create">

    <?= $this->render('_form', [
        'model' => $model,
        'auth'=>$auth,
    ]) ?>

</div>