<?php
use backend\widgets\Panel;
use yii\helpers\Html;
use yii\helpers\Url;


?>



<div class="row">
    <div class="col-sm-8">

    <?= Html::a('<i class="glyphicon glyphicon-user"></i> Pendaftaran User', ['add-data'], [
                                                        'class' => 'btn btn-success btn-flat btn-sm',
                                                        'data-toggle'=>"modal",
                                                        'data-target'=>"#myModal",
                                                        'data-title'=>'<i class=\'glyphicon glyphicon-plus\'></i>  TAMBAH DATA',]); ?>
    </div>
    <div class="col-sm-2">
    <?= Html::textInput("srch_all","",['placeholder'=>"Cari...",'onkeyup'=>'
                                                            $.pjax.reload({
                                                                url: "'.Url::to(['index']).'?UserSearch[srch_all]="+$(this).val(),
                                                                container: "#user-gridview",
                                                                timeout: 1000,
                                                            });
                                                            ','class'=>'form-control'])    ?>
    </div>        
    <div class="col-sm-2">
        
    <?php $data = array( 10=>'Aktif', 0=>'Tidak Aktif'); ?>

    <?= Html::dropDownList('status', null, $data,['prompt'=>'- Cari Status','onchange'=>'
                                                            $.pjax.reload({
                                                                url: "'.Url::to(['index']).'?UserSearch[status]="+$(this).val(),
                                                                container: "#user-gridview",
                                                                timeout: 1000,
                                                            });
                                                            ','class'=>'form-control']) ?>
    </div>
</div>