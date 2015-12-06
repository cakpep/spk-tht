<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;

?>
    <div class="col-lg-12">
    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>
        
        <div class="col-lg-3">
        <?= $form->field($model, 'countrycode') ?>
        </div>
        <div class="col-lg-3">
        <?= $form->field($model, 'countryname')->textInput(['onkeyup'=>'
                                                                urlKu("'.Url::to(['index']).'?CountrySearch[countryname]=",$(this).val(),"#country-pjax")                                                                
                                                        '])->label('Cari Nama') ?>
        </div>
        <div class="col-lg-3">
        <?php $data = ['countryname'=>'country name asc', '-countryname'=>'country name desc']; ?>        
        <?= $form->field($model, 'recordstatus')->dropDownList($data,['prompt'=>'- Urutkan Berdasar','onchange'=>'urlKu("'.Url::to(['index']).'?sort=",$(this).val(),"#country-pjax")','class'=>'form-control'])->label('Urutkan Berdasar') ?>
        </div>
        <div class="col-lg-3">
        <?php $data = ['Tidak Aktif', 'Aktif']; ?>        
        <?= $form->field($model, 'recordstatus')->dropDownList($data,['prompt'=>'- Pilih Status-','onchange'=>'urlKu("'.Url::to(['index']).'?CountrySearch[recordstatus]=",$(this).val(),"#country-pjax")','class'=>'form-control']) ?>
        </div>
    <?php ActiveForm::end(); ?>
    </div>


