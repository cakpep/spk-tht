<?php

use yii\helpers\Html;
use yii\widgets\ListView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CountrySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Countries';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="country-index">

    <h1><?= Html::encode($this->title) ?></h1>
    
    <?php echo $this->render('_search', ['model' => $searchModel]); ?>

    
    <?php Pjax::begin(['id'=>'country-pjax']) ?>
    <?= ListView::widget([
        'dataProvider' => $dataProvider,
        'itemOptions' => ['class' => 'item'],
        'itemView' => function ($model, $key, $index, $widget) {

        $flg=!empty($model->countryflag)?$model->countryflag:'no_flag.png';

        $v='<div class="col-lg-3">
                <h2>'.$model->countrycode.' '.\yii\helpers\Html::img('uploads/flag/' .$flg  ,['height'=>'25']).'</h2>
                

                <p>Kode : '.$model->countrycode.'</p>
                <p>Nama : '.$model->countryname.'</p>
                
                <p>'.
                Html::a('<i class="glyphicon glyphicon-search"></i> Detil Data', ['detil-data','id'=>$model->countryid], [
                                                        'class' => 'btn btn-default btn-flat',
                                                        'data-toggle'=>"modal",
                                                        'data-target'=>"#myModal",
                                                        'data-title'=>"<i class='glyphicon glyphicon-search'></i>  DETAIL DATA",])
                .'</p>
            </div>';
 
            return $v;
        },
    ]) ?>
    <?php Pjax::end() ?>

</div>
