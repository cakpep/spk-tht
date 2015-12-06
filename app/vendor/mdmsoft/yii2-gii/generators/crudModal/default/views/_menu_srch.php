<?php
use yii\helpers\Inflector;
use yii\helpers\StringHelper;

/* @var $this yii\web\View */
/* @var $generator yii\gii\generators\crud\Generator */

echo "<?php\n";
?>
use backend\widgets\Panel;
use yii\widgets\Pjax;
use yii\helpers\Html;
use yii\helpers\Url;

use <?= $generator->indexWidgetType === 'grid' ? "yii\\grid\\GridView" : "yii\\widgets\\ListView" ?>;

/* @var $this yii\web\View */
<?= !empty($generator->searchModelClass) ? "/* @var \$searchModel " . ltrim($generator->searchModelClass, '\\') . " */\n" : '' ?>
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = <?= $generator->generateString("Data {modelClass}", ['modelClass' => Inflector::camel2words(StringHelper::basename($generator->modelClass))]) ?>;
$this->params['breadcrumbs'][] = $this->title;
?>



<div class="row">
    <div class="col-lg-8">
    <?=  "<?=" ?> Html::a('<i class=\'glyphicon glyphicon-plus\'></i> Add '.$this->title, ['add-data'], ['class' => 'btn btn-primary']) ?>
    <?=  "<?=" ?> Html::a('<i class=\'glyphicon glyphicon-trash\'></i> Delete Selection', ['delete-all'], ['class' => 'btn btn-danger']) ?>
    </div>
    <div class="col-lg-2">
    <?=  "<?=" ?> Html::textInput("srch_all","",['placeholder'=>"Cari...",'onkeyup'=>'
                                                            $.pjax.reload({
                                                                url: "'.Url::to(['index']).'?<?= StringHelper::basename($generator->searchModelClass) ?>[srch_all]="+$(this).val(),
                                                                container: "#<?= Inflector::camel2id(StringHelper::basename($generator->modelClass)) ?>-gridview",
                                                                timeout: 1000,
                                                            });
                                                            ','class'=>'form-control'])    ?>
    </div>        
    <div class="col-lg-2">
        
    <?=  "<?php" ?> $data = array( 0=>'Aktif', 1=>'Tidak Aktif'); ?>

    <?=  "<?=" ?> Html::dropDownList('status', null, $data,['prompt'=>'- Cari Status','onchange'=>'
                                                            $.pjax.reload({
                                                                url: "'.Url::to(['index']).'?<?= StringHelper::basename($generator->searchModelClass) ?>[status]="+$(this).val(),
                                                                container: "#<?= Inflector::camel2id(StringHelper::basename($generator->modelClass)) ?>-gridview",
                                                                timeout: 1000,
                                                            });
                                                            ','class'=>'form-control']) ?>
    </div>
</div>