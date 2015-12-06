<?php

use yii\helpers\Html;
use yii\widgets\ListView;
use yii\widgets\Pjax;
use frontend\widgets\Panel;
use yii\helpers\Url;

?>

    <?php Pjax::begin(['id'=>'artikel-read-pjax']) ?>
                <?= ListView::widget([
                    'dataProvider' => $dataProvider,
                    // 'itemOptions' => ['class' => 'item'],
                    'itemView' => function ($model, $key, $index, $widget) {

                    $artikel_gbr=!empty($model->foto_artikel) ? $model->foto_artikel:'images.png';
                    
                    $v='
                        <div class="col-md-12">
                            
                            <div class="col-sm-4">   
                                <a href="#" class="thumbnail">                                                           
                                      <img src="/adm/uploads/artikel/'.$artikel_gbr.'" width="150" height="150"/>                                
                                </a>
                            </div>
                            <div class="col-sm-8">

                                <h3>'.Html::a($model->judul, ['artikel-publikasi/view','id'=>$model->id], [
                                                                    // 'class' => 'btn btn-xs btn-default btn-primary',
                                                                    'data-toggle'=>"modal",
                                                                    'data-target'=>"#myModal",
                                                                    'data-title'=>"<i class='glyphicon glyphicon-th-list'></i>",]).'</h3>
                            
                                '.substr($model->isi, 0, 270).'
                                <p>
                                    <span class="label label-default"><i class="glyphicon glyphicon-user"></i> '.$model->user->username.'</span>
                                    <span class="label label-default"><i class="glyphicon glyphicon-tag"></i> '.$model->kategori->nama.'</span>
                                    <span class="label label-default"><i class="glyphicon glyphicon-calendar"></i> '.date('d-m-Y H:i:s',strtotime($model->creaed_date)).'</span>
                                    <span class="label label-default"><i class="glyphicon glyphicon-comment"></i>  '.count($model->artikelKomentars).' Komentar</span>
                                </p>
                                
                            </div>
                        </div><hr>';
             
                        return $v;
                    },
                ]) ?>
                <?php Pjax::end() ?>