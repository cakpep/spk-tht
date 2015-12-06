<?php
use backend\widgets\Panel;
use yii\helpers\Html;
use yii\helpers\Url;


?>



<div class="row">
    <div class="col-sm-8">

    <?= Html::a('<i class="glyphicon glyphicon-plus"></i> Tambah Data', ['add-data'], [
                                                        'class' => 'btn btn-default btn-flat btn-sm',
                                                        'data-toggle'=>"modal",
                                                        'data-target'=>"#myModal",
                                                        'data-title'=>'<i class=\'glyphicon glyphicon-plus\'></i>  TAMBAH DATA',]); ?>


    <?= Html::a('<i class="glyphicon glyphicon-trash"></i> Hapus Seleksi', '#', [
                                                        'class' => 'btn btn-danger btn-flat btn-sm',
                                                        'onclick'=>'
                                                        var keys = $("#artikel-table-grid").yiiGridView("getSelectedRows");                
                                                        $.post( "'.Url::to(['delete-all','id'=>'']).'"+keys, function( data ) {
                                                            $.notify(data.message, data.alert);
                                                            $.pjax.reload({container: "#artikel-gridview",});
                                                        });

                                            ']) ?>
    </div>
    <div class="col-sm-4">
    <?= Html::textInput("srch_all","",['placeholder'=>"Cari...",'onkeyup'=>'
                                                            $.pjax.reload({
                                                                url: "'.Url::to(['index']).'?ArtikelSearch[srch_all]="+$(this).val(),
                                                                container: "#artikel-gridview",
                                                                timeout: 1000,
                                                            });
                                                            ','class'=>'form-control'])    ?>
    
        
   
    </div>
</div>