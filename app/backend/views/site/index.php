<?php
use backend\widgets\Panel;

$this->title = 'Sistem Pakar';
$this->params['breadcrumbs'][] = $this->title;

?>
<?php     Panel::begin([
        'title'=>"$this->title",
        'type'=>Panel::TYPE_DEFAULT
    ]);
?>


    <div class="body-content">

        <div class="row">
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-12">
                      <!-- <h2>Selamat Datang</h2> -->
                        <?php 

                        //To get whole logged user data
                        /*$user = \Yii::$app->user->identity;
                        print_r($user);
                        //To get id of f logged user
                        $userId = \Yii::$app->user->identity->id*/
                        ?>  
                
                <?php  
                if (\Yii::$app->user->can('Publisher')) {
                
                    echo $this->render('_charts',[
                            'artikelKomentar'=>$artikelKomentar,
                    ]);

                }if (\Yii::$app->user->can('Administrator')) {
                    echo $this->render('_charts_user',[
                            'rekap' => $rekap,
                    ]);

                }

                  ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                  <?= $this->render('_rekap', [
                        'rekap' => $rekap,
                    ]) ?>

            </div>
        </div>

    </div>

<?php Panel::end(); ?>