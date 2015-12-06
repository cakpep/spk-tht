<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\DetailView;
use backend\widgets\Panel;

$this->title = 'Profil';
$this->params['breadcrumbs'][] = $this->title;

?>
<?php     Panel::begin([
        'title'=>"$this->title",
        'type'=>Panel::TYPE_DEFAULT
    ]);
?>
<div class="user-profil-view">
    <div class="row"  >
        <div class="col-md-4 text-center">
            <?php 
                $gbr=!empty($model->foto)?$model->foto:'images.png';
                echo  '<img src='.Url::to('@web').'/../uploads/foto_profil/'.$gbr.' alt="" width="200" height="250" />';
            ?>            
            <h3><?= $model->nama ?> </h3>
             <?= Html::a('Update Profil <i class="glyphicon glyphicon-edit"></i>', ['update-data','id'=>$model->id], [
                                                        'class' => 'btn btn-default btn-success btn-block',
                                                        'data-toggle'=>"modal",
                                                        'data-target'=>"#myModal",
                                                        'data-title'=>"<i class='glyphicon glyphicon-edit'></i>  Update Profil", ]); ?>
        </div>
        <div class="col-md-8">
            <div class="row">
                <?php     Panel::begin([
                        'title'=>"Informasi Account",
                        'type'=>Panel::TYPE_DEFAULT
                    ]);
                ?>
                    <?= DetailView::widget([
                        'options'=> ['class' => 'table table-striped'],
                        'template'=> "<tr><th width='200px'>{label}</th><td>{value}</td></tr>",
                        'model' => $model,
                        'attributes' => [
                            'id',            
                            [
                                'attribute'=>'user_id',                                
                                'value'=>!empty($model->user_id) ? $model->user->username : '-',
                            ],                                        
                        ],
                    ]) ?>

                <?php  Panel::end(); ?>

            </div>
            <div class="row">
                <?php     Panel::begin([
                        'title'=>"Informasi Data Diri",
                        'type'=>Panel::TYPE_PRIMARY
                    ]);
                ?>
                <?= DetailView::widget([
                    'options'=> ['class' => 'table table-striped'],
                    'template'=> "<tr><th width='200px'>{label}</th><td>{value}</td></tr>",
                    'model' => $model,
                    'attributes' => [
                        
                        [
                            'attribute'=>'jenkel',                                
                            'value'=>$model->jenkel=='L'?'Laki-Laki':'Perempuan',
                        ],                       
                        'tempat_lahir',
                        [
                            'attribute'=>'tgl_lahir',                                
                            'value'=>date('d M Y',strtotime($model->tgl_lahir)),
                        ],                                               
                        [
                            'attribute'=>'agama_id',                                
                            'value'=>!empty($model->agama_id) ? $model->agama->name : '-',
                        ],
                        'no_telp',
                        'alamat:ntext',                        
                    ],
                ]) ?>

                <?php  Panel::end(); ?>

            </div>

            <div class="row">
                <?php     Panel::begin([
                        'title'=>"Informasi Fisik",
                        'type'=>Panel::TYPE_SUCCESS
                    ]);
                ?>
                <?= DetailView::widget([
                    'options'=> ['class' => 'table table-striped'],
                    'template'=> "<tr><th width='200px'>{label}</th><td>{value}</td></tr>",
                    'model' => $model,
                    'attributes' => [
                        'tinggi_badan',
                        'berat_badan',
                        [
                            'attribute'=>'tinggi_badan',  
                            'label'=>'Berat Badan Ideal',
                            'value'=>$model->beratIdeal(),
                        ],                         
                    ],
                ]) ?>

                <?php  Panel::end(); ?>

            </div>
    </div>
</div>

<?php Panel::end(); ?>