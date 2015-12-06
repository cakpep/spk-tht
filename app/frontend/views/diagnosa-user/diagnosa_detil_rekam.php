<?php
use backend\widgets\Panel;
use common\models\Diagnosa;
use yii\helpers\Html;
use yii\widgets\Pjax;
use yii\grid\GridView;

 // print_r($dataRekam->getModels());
 $wkt=$dataRekam->getModels()[0]['diagnosa_date'];



?>
<div class="row"> 
    <div class="col-md-12"> 
        <div class="col-md-4">            
            <table class="table">
                <tr>
                    <th>Tanggal diagnosa </th><td><?= date('d M Y',strtotime($wkt))?></td>
                </tr>
                <tr>
                    <th>Waktu/Jam Diagnosa </th><td><?= date('H:i:s',strtotime($wkt))?></td>
                </tr>
            </table>
        </div>    
    </div>
    <div class="col-md-12"> 
        <?php Pjax::begin(['id' => 'rekam-diagnosa-gridview']) ?> 

            <?= GridView::widget([
            'dataProvider' => $dataRekam,
            // 'filterModel' => false,//$searchModel,
            // 'filter'=>false,
            'columns' => [
                // ['class' => 'yii\grid\SerialColumn'],
                [
                    'attribute' => 'nama_gejala',
                    'format'=>'raw',
                    'filter'=>false,
                    'header'=>'Nama Gejala Yang Telah Dipilih',
                    /*'value' => function ($data){
                        return  $data->gejala->nama_gejala;
                    }*/
                ],
            ],
        ]); ?>

        <?php Pjax::end() ?> 
    </div>  
    
    <div class="col-sm-12"> 
    <?php

        $cfmax=array();
        $cfmaxp=array();
            echo "<table class='table table-bordered table-hover'>";

            echo "<thead><tr>";
                    echo "<th>Nama Penyakit</th>";
                    // echo "<th>Nilai MB</th>";
                    // echo "<th>Nilai MD</th>";
                    echo "<th>Hitung MB</th>";
                    echo "<th>Hitung MD</th>";
                    echo "<th>Hitung CF</th>";
            echo "</tr></thead>";
            foreach ($diagnosa as $key => $value) {

                    $mbh=Diagnosa::mbHtg(explode(',', $value['mb']));
                    $mdh=Diagnosa::mbHtg(explode(',', $value['md']));
                    $cfh=Diagnosa::cfHtg($mbh,$mdh);                

                    $cfmax[]=$cfh;                        
                    $cfmaxp[]=$value['nama_penyakit'];

                    echo "<tr>";
                        echo "<td>".$value['nama_penyakit']."</td>";
                        // echo "<td>".$value['mb']."</td>";
                        // echo "<td>".$value['md']."</td>";
                        echo "<td>".$mbh."</td>";
                        echo "<td>".$mdh."</td>";
                        echo "<td>".$cfh."</td>";
                    echo "</tr>";
                }
            echo "</table>";
    ?>
            <div class="rekam">
                <div class="alert alert-success">
                    <p>Dari hasil perhitungan diagnosa yang sudah dilakukan, POIN tertinggi CF anda 
                    <strong> <?php echo Diagnosa::cfMax($cfmax,'max'); ?> </strong></p>
                    <p>dari hasil perhitungan yang sudah dilakukan anda terkena penyakit 
                    <strong> <?php echo $cfmaxp[Diagnosa::cfMax($cfmax,'key')]; ?> </strong></p>
                <br>                
                
            </div>
            <div class="alert alert-warning">
            
            <strong> Perhitungan ini hanya merujuk pada hasil perhitungan CF dari nilai MB dan nilai MD yang sudah di tentukan oleh pakar dan bisa saja hasil dari diagnosa kurang akurat.</strong>            
            <br>
            <strong> Silakan Ke dokter THT terdekat untuk penanganan lebih lanjut</strong>
        </div>
            </div>

    </div>
</div>
</div>