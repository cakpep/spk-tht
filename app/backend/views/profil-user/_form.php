<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<div class="user-profil-form">

    <?php $form = ActiveForm::begin([
            'id'=>$model->formName(),        
            'fieldConfig' => [            
                'inputOptions' => [
                    'class'=>'form-control input-sm',
                ],
            ],
        ]); ?>

  
<div class="row">
    <div class="col-md-6">

        <?= $form->field($model, 'user_id')->textInput() ?>

        <?= $form->field($model, 'nama')->textInput(['maxlength' => 60]) ?>

        <?= $form->field($model, 'jenkel')->dropDownList([ 'L' => 'Laki-laki', 'P' => 'Perempuan', ], ['prompt' => '']) ?>

        <?= $form->field($model, 'tinggi_badan')->textInput() ?>

        <?= $form->field($model, 'berat_badan')->textInput() ?>

    </div>
    <div class="col-md-6">

        <?php 
            echo $form->field($model, 'agama_id')->dropDownList(
                                            $model->listAgama(),
                                            ['prompt'=>'Select...']);
        ?>

        <?= $form->field($model, 'tgl_lahir')->textInput() ?>

        <?= $form->field($model, 'tempat_lahir')->textInput() ?>

        <?= $form->field($model, 'alamat')->textInput(['maxlength' => 75]) ?>

        <?= $form->field($model, 'no_telp')->textInput(['maxlength' => 12]) ?>

    </div>
    <div class="col-md-12">
        <?= Html::submitButton($model->isNewRecord ? '<i class=\'glyphicon glyphicon-edit\'></i> Save' : '<i class=\' glyphicon glyphicon-edit \'></i> Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
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
                $.pjax.reload({container:'#user-profil-gridview'});
                 
                
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