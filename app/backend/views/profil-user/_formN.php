<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;

?>

<div class="user-profil-form">

    <?php $form = ActiveForm::begin([
                        'options'=>['enctype'=>'multipart/form-data'] // important
                ]); ?>

<div class="row">
    <div class="col-md-9">
        <?= $form->field($model, 'nama')->textInput(['maxlength' => 60]) ?>
    </div>
    <div class="col-md-3">
       <?php 
        echo $form->field($model, 'agama_id')->dropDownList(
                                        $model->listAgama(),
                                        ['prompt'=>'Select...']);
    ?>
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <?= $form->field($model, 'tempat_lahir')->textInput() ?>
    </div>
    <div class="col-md-4">
        
        <?= $form->field($model, 'tgl_lahir')->widget(DatePicker::classname(), [
                                'options' => ['placeholder' => 'Tanggal Lahir'],
                                'pluginOptions' => [
                                'autoclose'=>true
                                ]
                                ]) ?>
    </div>
    <div class="col-md-4">
        <?= $form->field($model, 'jenkel')->dropDownList([ 'L' => 'Laki-Laki', 'P' => 'Perempuan', ], ['prompt' => '']) ?>
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <?= $form->field($model, 'no_telp')->textInput(['maxlength' => 12]) ?>      
    </div>
    <div class="col-md-4">
        <?= $form->field($model, 'tinggi_badan')->textInput() ?>
    </div>
    <div class="col-md-4">
        <?= $form->field($model, 'berat_badan')->textInput() ?>
    </div>
</div>
<div class="row">
    <div class="col-md-8">
        <?= $form->field($model, 'alamat')->textarea(['rows' => 5]) ?>
    </div>
    <div class="col-md-4">
        <?= $form->field($model, 'foto')->fileInput()  ?>
    </div>
</div>

    

    

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Simpan' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
