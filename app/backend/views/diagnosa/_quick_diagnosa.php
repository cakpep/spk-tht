<?php
use backend\widgets\Panel;
use common\models\Diagnosa;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\bootstrap\Tabs;



    Panel::begin([
            'title'=>"Daftar Gejala",
            'type'=>Panel::TYPE_DEFAULT
        ]);
    ?>
        
        <?php $form = ActiveForm::begin([
            'layout' => 'horizontal',
            'fieldConfig' => [
                'template' => "{label}\n{beginWrapper}\n{input}\n{hint}\n{error}\n{endWrapper}",
                'horizontalCssClasses' => [
                    'label' => 'col-sm-4',
                    'offset' =>'' ,//'col-sm-offset-4',
                    'wrapper' => 'col-sm-4',
                    'error' => '',
                    'hint' => '',
                ],
            ],
            'action' => ['diagnosa-tht'],
            'method' => 'post',

        ]); ?>


        <?php echo $form->field($diagnosa, 'proses[]')->checkboxList($diagnosa->listGejala())->label(false); ?>

        <div class="form-group">
            <?= Html::submitButton('<i class="glyphicon glyphicon-ok-sign"></i> Diagnosa', ['class' => 'btn btn-primary']) ?>
            <?= Html::resetButton('<i class="glyphicon glyphicon-repeat"></i> Reset', ['class' => 'btn btn-default']) ?>
        </div>

        <?php ActiveForm::end(); ?>
    <?php Panel::end(); ?>
    </div>





<div class="col-sm-12"> 
<?php
 if(!empty($_POST['Diagnosa']['proses'])) {
    
    
    echo Tabs::widget([
        'items' => [
                [
                    'label' => 'Hasil Perhitungan Diagnosa',
                    'content' => $this->render('_hasil', [
                                        'dd' => $dd,
                                        'diagnosa'=>$diagnosa,
                                        'uncertantyTerm'=>$uncertantyTerm,
                                    ]),                 
                    'options' => ['id' => 'hasil'],
                    'active' => true
                ],        
                [
                    'label' => 'Detil Perhitungan Diagnosa',
                    'content' => $this->render('_detilhitung', [
                                        'dd' => $dd,
                                        'diagnosa'=>$diagnosa,
                                        'uncertantyTerm'=>$uncertantyTerm,
                                    ]),                
                ],
            ],
        ]);

    } ?>
</div>