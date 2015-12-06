<?php
use yii\bootstrap\Carousel;
use yii\helpers\Html;
use yii\widgets\ListView;
use yii\widgets\Pjax;
use frontend\widgets\Panel;
use yii\helpers\Url;

/* @var $this yii\web\View */

$this->title = 'Sistem Pakar';
?>
        <div class="row">
            <div class="col-md-9">
               <?php
                $cap='<p class="lead">Untuk mengetahui penyakit lebih awal dan agar lebih cepat bisa ditangani.</p>';
                $cap2='<p class="lead">pilihan dan solusi yang tepat untuk anda.</p>';
                $cap3='<p class="lead">Bisa diakses kapan saja dan dimana saja.</p>';

                echo Carousel::widget([
                    'items' => [                    
                        [
                            'content' => '<img src='.Url::to('@web').'/adm/uploads/carousel/aa.jpg width="1170px" height="300px"/>',
                            'caption' => $cap,
                            // 'options' => [...],
                        ],
                        [
                            'content' => '<img src='.Url::to('@web').'/adm/uploads/carousel/dokter.png width="1170px" height="300px"/>',
                            'caption' => $cap2,
                            // 'options' => [...],
                        ],
                        [
                            'content' => '<img src='.Url::to('@web').'/adm/uploads/carousel/dokter-ayu.jpg width="1170px" height="300px"/>',
                            'caption' => $cap3,
                            // 'options' => [...],
                        ],
                    ]
                ]);

               ?>
            </div>  
            <div class="col-md-3">     
                <div class="media">
                  <div class="media-left media-middle">
                    <a href="#">
                      <img data-holder-rendered="true" src=<?= Url::to('@web').'/adm/uploads/carousel/aa.jpg' ?> style="width: 64px; height: 64px;" class="media-object" data-src="holder.js/64x64" alt="64x64">
                    </a>
                  </div>
                  <div class="media-body">
                    <h4 class="media-heading">
                                        <?= Html::a('Apa itu penyakit THT?', ['info','id'=>3], [
                                                // 'class' => 'btn btn-xs btn-default',
                                                'data-toggle'=>"modal",
                                                'data-target'=>"#myModal",
                                                'data-title'=>"<i class='glyphicon glyphicon-hand-right'></i> Apa itu penyakit THT?"]) ?>
                    </h4>                    
                  </div>
                </div>
                <div class="media">
                  <div class="media-left media-middle">
                    <a href="#">
                      <img data-holder-rendered="true" src=<?= Url::to('@web').'/adm/uploads/carousel/dokter.png' ?>  style="width: 64px; height: 64px;" class="media-object" data-src="holder.js/64x64" alt="64x64">
                    </a>
                  </div>
                  <div class="media-body">
                    <h4 class="media-heading">
                                        <?= Html::a('Apa itu Sistem Pakar?', ['info','id'=>2], [
                                                // 'class' => 'btn btn-xs btn-default',
                                                'data-toggle'=>"modal",
                                                'data-target'=>"#myModal",
                                                'data-title'=>"<i class='glyphicon glyphicon-hand-right'></i> Apa itu Sistem Pakar?"]) ?>
                    </h4>
                  </div>
                </div>
                <div class="media">
                  <div class="media-left media-middle">
                    <a href="#">
                      <img data-holder-rendered="true" src=<?= Url::to('@web').'/adm/uploads/carousel/dokter-ayu.jpg' ?>  style="width: 64px; height: 64px;" class="media-object" data-src="holder.js/64x64" alt="64x64">
                    </a>
                  </div>
                  <div class="media-body">                    
                    <h4 class="media-heading">
                                        <?= Html::a('Apa itu Metode CF?', ['info','id'=>1], [
                                                // 'class' => 'btn btn-xs btn-default',
                                                'data-toggle'=>"modal",
                                                'data-target'=>"#myModal",
                                                'data-title'=>"<i class='glyphicon glyphicon-hand-right'></i> Apa itu Metode CF?"]) ?>
                    </h4>
                  </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="features">                
                 <?= $this->render('_feature') ?>
            </div>            
        </div>

        <div class="row">
            <div class="col-sm-9">
                <div class="panel panel-default">
                    <div class="panel-heading"><i class='glyphicon glyphicon-th-list'></i> Berita Terbaru</div>
                    <div class="panel-content">
                        <div class="row">
                            <div class="col-md-12">
                                <?= $this->render('_artikel', [
                                    'dataProvider' => $dataProvider,
                                ]) ?>
                            </div>
                        </div>
                   </div> <!-- panel -->                
                </div>
            </div>
            </div>
            <div class="col-sm-3">                
                <div class="panel panel-default">
                    <div class="panel-heading"><i class='glyphicon glyphicon-th-list'></i> Komentar Terbanyak</div>
                    <div class="panel-content" style="margin:1%">
                        <div class="row">
                            <div class="col-md-12">   
                                <ul class="list-group">
                                     <?= $this->render('_komentar', [
                                        'mostComment' => $mostComment,
                                    ]) ?>
                                </ul>
                            </div>
                        </div>
                   </div> <!-- panel -->                
                </div>
        </div>

<!-- 
        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-3">
                </div>
                <div class="col-sm-3">
                    <h2>Heading</h2>
                </div>
                <div class="col-sm-3">
                    <h2>Heading</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                        ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                        fugiat nulla pariatur.</p>
                </div>
                <div class="col-sm-3">
                    <h2>Heading</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                        ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                        fugiat nulla pariatur.</p>
                </div>
            </div>
        </div>
 -->






