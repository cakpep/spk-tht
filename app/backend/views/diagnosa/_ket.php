<?php
use yii\helpers\Html;
?>
    <div class="alert alert-warning">   
        <strong> 
                Perhitungan ini hanya merujuk pada hasil perhitungan CF
                dari nilai MB dan nilai MD yang sudah di tentukan oleh seorang pakar 
                dan bisa saja hasil diagnosa bisa kurang akurat.
        </strong>            
        <br>
        <strong> Silakan Ke dokter THT terdekat untuk penanganan lebih lanjut</strong>
    </div>
    <div class="row">              
            <!-- ?= Html::a('<i class="glyphicon glyphicon-random"></i> Simpan Diagnosa Dan Lanjutkan', ['diagnosa-user/rekam-diagnosa','gejala'=>$_POST['Diagnosa']['proses']], ['class' => 'btn btn-primary btn-flat',]); ?> -->
            <?= Html::a('<i class="glyphicon glyphicon-refresh"></i> Diagnosa Ulang', ['diagnosa/diagnosa-tht'], ['class' => 'btn btn-warning btn-flat',]); ?>                         
    </div>