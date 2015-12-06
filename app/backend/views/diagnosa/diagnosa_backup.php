<?php
use backend\widgets\Panel;
// print_r($model);
use common\models\Diagnosa;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\db\Query;

?>



<div class="row">
<?php
Panel::begin([
        'title'=>"$this->title",
        'type'=>Panel::TYPE_DEFAULT
    ]);



/*foreach($model as $keys => $val){
echo $val['id'].':'.$val['nama_gejala'];

}
*/

?>


<div class="diagnosa-search">

    <?php $form = ActiveForm::begin([
        'action' => ['diagnosa-tht'],
        'method' => 'post',
    ]); ?>


    <?php echo $form->field($dd, 'proses[]')->checkboxList($dd->listGejala()); ?>

    <div class="form-group">
        <?= Html::submitButton('<i class=\"glyphicon glyphicon-search\"></i> Diagnosa', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div
>
<?php
 Panel::end(); 
 
 if(!empty($_POST['Diagnosa']['proses'])){
	// print_r($_POST['Diagnosa']['proses']);
    $aa=$_POST['Diagnosa']['proses'];
    $data=array();
    foreach ($aa as  $values) {
        $data=[$values];
    }
    
    // print_r($data);

 function cf($mb,$md)
{
    $aa=$mb+$md*(1-$mb);
    return $aa;
}
    
    $diagnosa = \common\models\Diagnosa::find()
        ->where([
            'gejala_id' => $aa,
            ])
        ->orderBy('penyakit_id')
        ->all();

$cfa=array();


foreach ($diagnosa as $key => $value) {

        $cfa[]=[$value->mb,$value->md];

}

$dd=\common\models\Diagnosa::diagnosaData();

$mb=array();

for ($i=0; $i <count($dd) ; $i++) { 
    
    $mb[]=explode(',', $dd[$i]['mb']);
    $md[]=explode(',', $dd[$i]['md']);
    // $dd->mbHtg($dd[$i]['mb']);
}

$cc=\common\models\Diagnosa::mbHtg($mb[0]);

$mbbb=0;//$dd->mbHtg($mb);

echo "<pre>";
print_r($mb[0]);
print_r($dd);
// print_r($mbbb);
echo "</pre>";

echo "<table class='table'>";
echo "<tr>";
        echo "<td>nama_penyakit<td>";
        echo "<td>mb<td>";
        echo "<td>md<td>";
        echo "<td>hitung mb<td>";
        echo "<td>hitung md<td>";
        echo "<td>hitung cf<td>";
echo "</tr>";
foreach ($dd as $key => $value) {
        echo "<tr>";
        echo "<td>".$value['nama_penyakit']."<td>";
        echo "<td>".$value['mb']."<td>";
        echo "<td>".$value['md']."<td>";
        echo "<td>".Diagnosa::mbHtg(explode(',', $value['mb']))."<td>";
        echo "<td>".Diagnosa::mbHtg(explode(',', $value['md']))."<td>";
        echo "<td>".(Diagnosa::mbHtg(explode(',', $value['mb']))-Diagnosa::mbHtg(explode(',', $value['md'])))."<td>";

        echo "</tr>";
    }
echo "</table>";



$c=1;
$cc=0;
$xxx=0;
for ($i=0; $i <count($mb) ; $i++) { 

    // echo 'mb = '.$mb[$i][0].'+'.$mb[$i][1].'='.($mb[$i][0]+$mb[$i][1]*(1-$mb[$i][0])).'<br>';
    // echo 'md = '.$md[$i][0].'+'.$md[$i][1].'='.($md[$i][0]+$md[$i][1]*(1-$md[$i][0])).'<br>';

    // $mb2[]=($mb[$i][0]+$mb[$i][1]*(1-$mb[$i][0]));
    // $md2[]=($md[$i][0]+$md[$i][1]*(1-$md[$i][0]));

/*    if($i>1){
        
        $mb2[]=($mb2[$cc]+$mb[$i][$c]*(1-$mb2[$cc]));

        $md2[]=($md[$i][0]+$md[$i][1]*(1-$md[$i][0]));
        $c++;
        $cc++;

    }else{
        $mb2[]=($mb[$i][0]+$mb[$i][1]*(1-$mb[$i][0]));
        $md2[]=($md[$i][0]+$md[$i][1]*(1-$md[$i][0]));
    }
*/
    for ($a=0; $a < count($mb[0]); $a++) { 
        // echo $mb[$i][$a].'+';

        if($a<=1){
        echo $mb[$i][$a].'+'; //ini a

        $x=$mb[$i][$a];
            
        }else{
            echo '<br>'; //ini b n
            echo $mb[$i][$a].'+';
            
        }

    }
        echo 'hasil =';
        echo '<br>';

/*    if($i<=1){
        echo $i;        
    }else{
        echo '<br>';
        echo $i;
    }*/
}
print_r($mb[0]);

/*for ($i=0; $i <count($mb2) ; $i++) { 
    $cf[]=$mb2[$i]-$md2[$i];

}
*/
// print_r($mb2);

// echo "<br>Hasil =".max($cf);
// print_r($mb2);
echo "<table class='table'>";
$penyakit_test=array();
$penyakit_mb=array();
$penyakit_md=array();

    foreach ($diagnosa as $key => $value) {
        $penyakit_test[]=$value->penyakit->nama_penyakit;
        $penyakit_mb[]=$value->mb;
        $penyakit_md[]=$value->md;

        echo "<tr>";
        echo "<td>".$value->penyakit->nama_penyakit."<td>";
        echo "<td>".$value->gejala->nama_gejala."<td>";
        echo "<td>".$value->mb."<td>";
        echo "<td>".$value->md."<td>";
        echo "<td>".cf($value->mb,$value->md)."<td>";
        echo "</tr>";
    }
echo "</table>";

    /*foreach ($model as $key => $value) {
        $cfa=$value->mb-$value->md;

    }*/

}
$penyakits=array("penyakit1","penyakit1","penyakit1","penyakit1","penyakit1","penyakit2","penyakit2","penyakit2","penyakit2","penyakit2");
print_r($penyakit_mb);
echo "<br>";
print_r($penyakits);
 ?>
</div>
<?php
$tess=array("penyakit1","penyakit1","penyakit1");
$tessmd=array(0.95,0.92,0.48,0.2);
$tessmb=array(0.1,0.2,0.5);
$a=0;
$x=array();

for ($i=0; $i <count($tessmd) ; $i++) { 
    if($i<=1){
        $x[1]=$tessmd[0]+$tessmd[1]*(1-$tessmd[0]);
    }else{   
        $x[] =$tessmd[$i];        
    }
}

$hs=array();
$d=2;
$j=0;
$aa=1;
$k=$x[1];
for ($i=0; $d <=count($x) ; $i++) { 
         
    $hsl=$k+=$tessmd[$d]*(1-$k);
    echo $k.'+'.$tessmd[$d].'*(1-'.$k.')='.$hsl.'<br>';
        // $k+=$tessmd[$d]*(1-$k);    

        $j=$j+=$x[$aa];
        $d++;
        $aa++;
        
}

echo "<pre>";
echo  $j;
echo "<br>";
echo  $k;
echo "</pre>";

echo "<pre>";
print_r($x);
print_r($hs);
print_r($x);

echo "</pre>";

            




/*
$penyakit=array("penyakit1","penyakit1","penyakit1","penyakit1","penyakit1","penyakit2","penyakit2","penyakit2","penyakit2","penyakit2");
$md=array(0.2,0.5,0.3,0.2,0.6,0.1,0.2,0.5,0.3,0.2);
$mb=array(0.1,0.2,0.5,0.3,0.5,0.1,0.2,0.5,0.3,0.2);
*/
$penyakit=$penyakit_test; //array("penyakit1","penyakit1","penyakit1","penyakit1","penyakit1","penyakit2","penyakit2","penyakit2","penyakit2","penyakit2");
$md=$penyakit_md;// array(0.2,0.5,0.3,0.2,0.6,0.1,0.2,0.5,0.3,0.2);
$mb=$penyakit_mb; //array(0.1,0.2,0.5,0.3,0.5,0.1,0.2,0.5,0.3,0.2);

$cek_penyakit=array();
$hasil_md=array();
$hasil_mb=array();
$jumlah=array();

for($a=0;$a<count($penyakit);$a++){

    if(!in_array($penyakit[$a],$cek_penyakit)){
        $cek_penyakit[]=$penyakit[$a];
        $hasil_md[$penyakit[$a]]=$md[$a];
        $hasil_mb[$penyakit[$a]]=$mb[$a];
        $jumlah[$penyakit[$a]]=1;
    }else{
        if($jumlah[$penyakit[$a]]<2){
            $hasil_md[$penyakit[$a]]=$hasil_md[$penyakit[$a]]+$md[$a]*(1-$md[$a]);
            $hasil_mb[$penyakit[$a]]=$hasil_mb[$penyakit[$a]]+$mb[$a]*(1-$mb[$a]);
            $hasil_akhir=$hasil_md[$penyakit[$a]]-$hasil_mb[$penyakit[$a]];
        }else{
            $hasil_md[$penyakit[$a]]=$hasil_md[$penyakit[$a]]+$md[$a]*(1-$hasil_md[$penyakit[$a]]);
            $hasil_mb[$penyakit[$a]]=$hasil_mb[$penyakit[$a]]+$mb[$a]*(1-$hasil_mb[$penyakit[$a]]);
            $hasil_akhir=$hasil_mb[$penyakit[$a]]-$hasil_md[$penyakit[$a]];
        }
            $jumlah[$penyakit[$a]]=$jumlah[$penyakit[$a]]+1;
    }
}

echo("hasil_md : ");
echo("<pre>");
print_r($hasil_md);
echo("<br />hasil : ");
// echo number_format($hasil_akhir,4);
echo("</pre>");
echo("hasil_mb : ");
echo("<pre>");
print_r($hasil_mb);
echo("<br />hasil : ");
// print_r($hasil_akhir);
echo("</pre>");
echo("jumlah : ");
echo("<pre>");
print_r($jumlah);
echo("</pre>");
?>