<?php
use yii\helpers\Html;
use backend\widgets\Panel;
use yii\bootstrap\Tabs;

?>



    <div class="row">
        <div class="col-md-6">
        <?php    
            echo '<table class="table table-bordered">';
                echo '<tr>';    
                echo '<th>Nama gejala yang anda pilih</th>';
                echo '</tr>';    

                foreach ($diagnosa->pilihanGejala($_POST['Diagnosa']['proses']) as $kc => $v) {
                    echo '<tr>';
                    echo '<td> <i class="glyphicon glyphicon-ok"></i> '.$v['nama_gejala'].'</td>';
                    echo '</tr>';    
                }

            echo '</table>';
            
        	$cfmax=array();
            $cfmaxp=array();
            
            foreach ($dd as $key => $value) {

                        $mbh=$diagnosa->mbHtg(explode(',', $value['mb']));
                        $mdh=$diagnosa->mbHtg(explode(',', $value['md']));
                        $cfh=$diagnosa->cfHtg($mbh,$mdh);                
                        $cfmax[]=$cfh;                        
                        $cfmaxp[]=$value['nama_penyakit'];

        	}    

        ?>
        </div>
        <div class="col-md-6">
            <div class="alert alert-info">
                <div class="row">
                    <div class="col-md-6">
                        <center>
                            Dari hasil perhitungan diagnosa, POIN tertinggi CF anda <p><strong> <?php echo $diagnosa->cfMax($cfmax,'max'); ?> </strong><p>
                            dari hasil perhitungan anda terkena penyakit <p><strong><?php echo $cfmaxp[$diagnosa->cfMax($cfmax,'key')]; ?></strong>  </p>      
                        </center>
                    </div>
                    <div class="col-md-6">
                            <?= Html::a('<i class="glyphicon glyphicon-fullscreen"></i>  Cara pencegahan/pengobatan <br> dan detil '.$cfmaxp[$diagnosa->cfMax($cfmax,'key')], 
                                            ['diagnosa-user/info','penyakit'=>$cfmaxp[$diagnosa->cfMax($cfmax,'key')]], 
                                                [   
                                                'class' => 'btn btn-primary btn-flat',
                                                'data-toggle'=>"modal",
                                                'data-target'=>"#myModal",
                                                'data-title'=>'<i class=\'glyphicon glyphicon-file\'></i> Informasi, Pencegahan dan Pengobatan '.$cfmaxp[$diagnosa->cfMax($cfmax,'key')],
                                            ]); ?>
                    </div>        
                </div>
            </div>
            
                    <?php

                     echo Tabs::widget([
                                'items' => [
                                        [
                                            'label' => 'Keterangan',
                                            'content' => $this->render('_ket'),          
                                            'options' => ['id' => 'ket'],
                                            'active' => true
                                        ],        
                                        [
                                            'label' => 'Tabel Ukuran Ketidakpastian',
                                            'options' => ['id' => 'Tabel'],
                                            'content' => $this->render('_tab_certanty_term', [
                                                                'uncertantyTerm'=>$uncertantyTerm,
                                                            ]), 
                                        ],
                                    ],
                                ]);
                    ?>             
                
        
    </div>    
</div>          
