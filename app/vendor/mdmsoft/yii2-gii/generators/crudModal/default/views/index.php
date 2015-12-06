<?php

use yii\helpers\Inflector;
use yii\helpers\StringHelper;

/* @var $this yii\web\View */
/* @var $generator yii\gii\generators\crud\Generator */

$urlParams = $generator->generateUrlParams();
$nameAttribute = $generator->getNameAttribute();

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
<?= "<?php " ?>
    Panel::begin([
        'title'=>"$this->title",
        'type'=>Panel::TYPE_DEFAULT
    ]);
?>


<div class="<?= Inflector::camel2id(StringHelper::basename($generator->modelClass)) ?>-index">

    
<?php if(!empty($generator->searchModelClass)): ?>
<?= "    <?php " . ($generator->indexWidgetType === 'grid' ? "// " : "") ?>echo $this->render('_search', ['model' => $searchModel]); ?>
<?php endif; ?>

<?= "    <?php "  ?>echo $this->render('_menu_srch'); ?>    

<hr>

<?= "<?php" ?> Pjax::begin(['id' => '<?= Inflector::camel2id(StringHelper::basename($generator->modelClass)) ?>-gridview']) ?> 
<?php if ($generator->indexWidgetType === 'grid'): ?>
    <?= "<?= " ?>GridView::widget([
        'dataProvider' => $dataProvider,
        <?= !empty($generator->searchModelClass) ? "'filterModel' => \$searchModel,\n        'columns' => [\n" : "'columns' => [\n"; ?>
            ['class' => 'yii\grid\SerialColumn'],
            ['class' => 'yii\grid\CheckboxColumn'],

<?php
$count = 0;
if (($tableSchema = $generator->getTableSchema()) === false) {
    foreach ($generator->getColumnNames() as $name) {
        if (++$count < 6) {
            echo "            '" . $name . "',\n";
        } else {
            echo "            // '" . $name . "',\n";
        }
    }
} else {
    foreach ($tableSchema->columns as $column) {
        $format = $generator->generateColumnFormat($column);
        if (++$count < 6) {
            echo "            '" . $column->name . ($format === 'text' ? "" : ":" . $format) . "',\n";
        } else {
            echo "            // '" . $column->name . ($format === 'text' ? "" : ":" . $format) . "',\n";
        }
    }
}
?>            
            [
                'class' => 'yii\grid\ActionColumn',
                'header'=>'Action',
                'template' => '{view}{update}{delete}',
                'buttons' => [
                    'view' => function ($url,$model) {
                        return  Html::a('<i class="glyphicon glyphicon-search"></i>', ['detail-data','id'=>$model->id], [
                                                        'class' => 'btn btn-default btn-flat',
                                                        'data-toggle'=>"modal",
                                                        'data-target'=>"#myModal",
                                                        'data-title'=>"<i class='glyphicon glyphicon-search'></i>  DETAIL DATA",]);
                    },
                    'update' => function ($url,$model) {
                        return  Html::a('<i class="glyphicon glyphicon-edit"></i>', ['update-data','id'=>$model->id], [
                                                        'class' => 'btn btn-default btn-flat',
                                                        'data-toggle'=>"modal",
                                                        'data-target'=>"#myModal",
                                                        'data-title'=>"<i class='glyphicon glyphicon-edit'></i>  UPDATE DATA", ]);
                    },
                    'delete' => function ($url,$model) {
                        return  Html::a('<i class="glyphicon glyphicon-trash"></i>', ['delete', 'id' => $model->id], [
                                'class' => 'btn btn-danger btn-flat',
                                'data' => [
                                    'confirm' => 'Apa Anda Yakin Akan Menghapus Data Ini?',
                                    'method' => 'post',
                                ],
                            ]);
                    }

                ],
                
                
            ],
        ],
    ]); ?>
<?php else: ?>
    <?= "<?= " ?>ListView::widget([
        'dataProvider' => $dataProvider,
        'itemOptions' => ['class' => 'item'],
        'itemView' => function ($model, $key, $index, $widget) {
            return Html::a(Html::encode($model-><?= $nameAttribute ?>), ['view', <?= $urlParams ?>]);
        },
    ]) ?>
<?php endif; ?>
<?= "<?php" ?> Pjax::end() ?>
</div>
<?= "<?php" ?> Panel::end(); ?>