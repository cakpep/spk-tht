<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<div class="artikel-search">

    <!-- ?php $form = ActiveForm::begin([
        'method' => 'post',
    ]); ?> -->

    <?php $form = ActiveForm::begin([
        'id'=>$comment->formName(),        
        // 'method' => 'post',
        'fieldConfig' => [            
            'inputOptions' => [
                'class'=>'form-control input-sm',
            ],
        ],
    ]); ?>

    
    <?= $form->field($comment, 'komentar')->textarea(['rows' => 6]) ?>

    
    <div class="form-group">
        <?= Html::submitButton('Kirim komentar', ['class' => 'btn btn-primary']) ?>

        <?= Html::submitButton('Kirim ', ['id'=>'check','class' => 'btn btn-primary']) ?>

        <div id="info"></div>
    
    </div>

    <?php ActiveForm::end(); ?>

</div>



<?php 
$script = <<<  JS


$('form#{$comment->formName()}').on('beforeSubmit',function(e)
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
                 $("#infos").html(result.message);

                if(result.proses=='save'){            
                    $(\$form).trigger("reset");          
                    $.pjax.reload({container:'#komentar-pjax'});
                    // $.notify(result.message, result.alert);
                }if(result.proses=='update'){            
                   $(document).find('#myModal').modal('hide'); 
                }

            }else{
                $(\$form).trigger("reset");
                // $.notify(result.message, result.alert);
            }

        }).fail(function(){
            console.log("server eror");
        });

    return false;
    
    });

JS;

$this->registerJs($script);

?>