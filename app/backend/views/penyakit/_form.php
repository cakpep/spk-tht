<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use zxbodya\yii2\tinymce\TinyMce;
?>

<div class="penyakit-form">

    <?php $form = ActiveForm::begin([
            'id'=>$model->formName(),        
            'fieldConfig' => [            
                'inputOptions' => [
                    'class'=>'form-control input-sm',
                ],
            ],
        ]); ?>

 
    <div class="row">
        <div class="col-sm-12">
            <?= $form->field($model, 'nama_penyakit')->textInput(['maxlength' => 75]) ?>            
        </div>
        <div class="col-sm-6">

            <?php 

            echo $form->field($model, 'penyakit_jenis_id')->dropDownList(
                                            $model->listJenisPenyakit(),
                                            ['prompt'=>'Select...']);
            ?>            

        </div>
        <div class="col-sm-6">            
            <?php 
            echo $form->field($model, 'status')->dropDownList(
                                        array( 0=>'Tidak Aktif', 1=>'Aktif'),
                                        ['prompt'=>'Select...']);
            ?>                

        </div>
        <div class="col-sm-12">
            <?= $form->field($model, 'ket')->widget(TinyMce::className()) ?>
        </div>
        
    </div>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? '<i class=\'glyphicon glyphicon-ok\'></i> Simpan Data' : '<i class=\' glyphicon glyphicon-edit \'></i> Update Data', ['class' => $model->isNewRecord ? 'btn btn-success btn-flat btn-sm' : 'btn btn-primary btn-flat btn-sm']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php 
$script = <<<  JS
$('form#{$model->formName()}').on('beforeSubmit',function(e)
{
     var \$form = $(this);
    
    $.post(
        \$form.attr("action"), //serialize Yii2 form
        \$form.serialize()

     )
        .done(function(result){
        
            if(result.success==true){            
                // console.log(result);
                // $("#info").html(result.message);

                if(result.proses=='save'){            
                    $(\$form).trigger("reset");          
                }if(result.proses=='update'){            
                   $(document).find('#myModal').modal('hide'); 
                }

                $.notify(result.message, result.alert);
                $.pjax.reload({container:'#penyakit-gridview'});
                 
                
            }else{
                $(\$form).trigger("reset");
                $.notify(result.message, result.alert);
            }

        }).fail(function(){
            console.log("server eror");
        });

    return false;
    
    });

JS;

$this->registerJs($script);

?>