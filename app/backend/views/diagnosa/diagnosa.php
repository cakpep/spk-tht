<?php
use backend\widgets\Panel;
use yii\bootstrap\Tabs;
$this->title = 'Diagnosa';
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="row">
	<div class="col-sm-6">
		<div class="list-group">
		  <a href="#" class="list-group-item">
		    <h4 class="list-group-item-heading">Langkah-langkah Diagnosa</h4>
		    <p class="list-group-item-text">
		    	<ul>
		    		<li>Untuk memulai dignosa penyakit, pastikan Gejala-gejala yang timbul.</li>
		    		<li>Kemudian pilihlah/centanglah gejala-gejala sesuai dengan yang dirasakan pada form daftar gejala di bawah ini.</li>
		    		<li>Kemudian jika sudah klik tombol diagnosa.</li>
		    		<li>Untuk memulai/memilih ulang semua pilihan klik reset.</li>
		    	</ul>
		    </p>
		  </a>
		</div>
	</div>
    <div class="col-sm-12">
        <?= $this->render('_quick_diagnosa', [
                            'model' => $model,  
                            'diagnosa' =>$diagnosa,
                            'dd'=>$dd,
                            'hasil'=>$hasil,
                            'uncertantyTerm'=>$uncertantyTerm,
                        ])
        ?>
    </div>
</div>


