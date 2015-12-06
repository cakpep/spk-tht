<?php
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

$this->title = 'Rekam Hasil Diagnosa ';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="diagnosa-user-index">

    <h3><?= Html::encode($this->title) ?></h3>

    <?php Pjax::begin(['id' => 'penyakit-gridview']) ?> 

    <?= GridView::widget([
        'dataProvider' => $dataRekam,
        // 'filterModel' => $searchModel,
        'columns' => [
            // ['class' => 'yii\grid\SerialColumn'],

            
            'diagnosa_ke',
            [
                'attribute' => 'diagnosa_date',
                'format'=>'raw',
                'header'=>'Tanggal Diagnosa',
                'value' => function ($data){                    
                    return  date('d M Y' ,strtotime($data['diagnosa_date']));                   
                }
            ],

            [
                'attribute' => 'diagnosa_ke',
                'format'=>'raw',
                'header'=>'Penyakit Anda',
                'value' => function ($data){
                    $dataRek=\common\models\Diagnosa::diagnosaRekam($data['diagnosa_ke']);
                    $has=\common\models\Diagnosa::rekapDiagnosa($dataRek);                    
                    return  $has['nama_penyakit'];
                }
            ],

            [
                'class' => 'yii\grid\ActionColumn',
                'header'=>'Action',
                'headerOptions' => ['width' => '180'],
                'template' => '{detil}',
                'buttons' => [
                    'detil' => function ($url,$model) {
                        return  Html::a('<i class="glyphicon glyphicon-search"></i> Detil Data Diagnosa', ['detil-diagnosa','ke'=>$model['diagnosa_ke']], [
                                                        'class' => 'btn btn-primary btn-flat btn-block',
                                                        'data-toggle'=>"modal",
                                                        'data-target'=>"#myModal",
                                                        'data-title'=>"<i class='glyphicon glyphicon-search'></i>  DETIL INFORMASI HASIL REKAM DIAGNOSA",]);
                    },                    
                ],
                
                
            ],
        ],
    ]); 


    ?>

    <?php Pjax::end() ?> 

</div>
