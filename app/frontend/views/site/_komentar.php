<?php 
use yii\helpers\Html;

foreach ($mostComment as $key => $value) {
                      
  echo  '<li class="list-group-item">                            
             <span class="badge badge-primary">'.$value['jum_koment'].'</span>
            '.
                Html::a($value['judul'], ['artikel-publikasi/view','id'=>$value['id']], [
                                                // 'class' => 'btn btn-xs btn-default',
                                                'data-toggle'=>"modal",
                                                'data-target'=>"#myModal",
                                                'data-title'=>"<i class='glyphicon glyphicon-hand-right'></i> ".$value['judul'],])
            .'
            
        </li>';

}


/*<p>
                <span class="label label-default"><i class="glyphicon glyphicon-user"></i> '.$value['username'].' </span><br>
                <span class="label label-primary"><i class="glyphicon glyphicon-tag"></i> '.$value['kategori'].' </span><br>
                <span class="label label-success"><i class="glyphicon glyphicon-calendar"></i> '.date('d-m-Y H:i:s',strtotime($value['creaed_date'])).'</span><br>
                <span class="label label-default"><i class="glyphicon glyphicon-comment"></i>  '.$value['jum_koment'].' Komentar</span><br>
            </p>*/
            ?>