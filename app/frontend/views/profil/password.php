<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use frontend\widgets\Panel;


$this->title = 'ganti password';
$this->params['breadcrumbs'][] = $this->title;
?>
<?php
    Panel::begin([
        'title'=>$this->title,
        'type'=>Panel::TYPE_DEFAULT
    ]);

    
    
?>
<div class="site-reset-password">
    
    <p>Masukan Passowrd Baru Anda.</p>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(); ?>

                <?= $form->field($model, 'password_lama')->passwordInput()->label('Masukan Passowrd lama anda') ?>
                <?= $form->field($model, 'password')->passwordInput()->label('Passowrd Baru') ?>
                <?= $form->field($model, 'password_ulang')->passwordInput()->label('Ulangi Passowrd Baru') ?>


                <div class="form-group">
                    <?= Html::submitButton('<i class="glyphicon glyphicon-edit"></i> Update Passowrd', ['class' => 'btn btn-primary']) ?>
                </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
<?php Panel::end(); 