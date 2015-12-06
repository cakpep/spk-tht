<?php
use backend\widgets\Panel;
use yii\widgets\Pjax;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ListView;

$script = <<<  JS

    $('body').on('click', 'a#delete-gridview', function (event){
        var link = $(this)    
        var href = link.attr("href");            
            yii.confirm = function (message, ok, cancel) {
                bootbox.confirm(
                    {
                        message: message,
                        buttons: {
                            confirm: {
                                label: "OK"
                            },
                            cancel: {
                                label: "Cancel"
                            }
                        },
                        callback: function (confirmed) {
                            if (confirmed) {
                                // !ok || ok();                            
                                $.ajax({
                                    url: href,
                                    type: "post",
                                    success: function(data) {
                                        if(data.success==true){
                                            $(".bootbox").modal("hide")
                                            $.notify(data.message, data.alert);
                                            $.pjax.reload({container:"#user-gridview"})
                                        }
                                        else{
                                            alert("Saved");
                                        }                
                                    }
                                });
                                return false;

                            } else {
                                !cancel || cancel();
                            }
                        }
                    }
                );
                // confirm will always return false on the first call
                // to cancel click handler
                return false;
            }
    });

JS;

$this->registerJs($script);

$this->title = 'Data User';
$this->params['breadcrumbs'][] = $this->title;

?>

<?php     Panel::begin([
        'title'=>"$this->title",
        'type'=>Panel::TYPE_DEFAULT
    ]);
?>


<div class="user-index">

    <!-- ?php echo $this->render('_search', ['model' => $searchModel]); ?> -->

    <?php echo $this->render('_menu_srch'); ?>    

<hr>

<div class="row">
<?php Pjax::begin(['id' => 'user-gridview']) ?> 
    <?= ListView::widget([
        'dataProvider' => $dataProvider,
        // 'itemOptions' => ['class' => 'item'],
        'itemView' => function ($model, $key, $index, $widget) {
            
                    $artikel_gbr=!empty($model->userProfils->foto)?$model->userProfils->foto:'images.png';
                    
                    $v='
                        <div class="col-md-12">                            
                            <div class="col-sm-4">   
                                <a href="#" class="thumbnail">                                                           
                                      <img src='.Url::to('@web').'/../uploads/foto_profil/'.$artikel_gbr.' width="150" height="150"/>                                
                                </a>
                            </div>
                            <div class="col-sm-8">

                                <h3><i class="glyphicon glyphicon-user"></i> '.Html::a(!empty($model->userProfils->nama) ? $model->userProfils->nama : $model->username, ['user/detail-data','id'=>$model->id], [
                                                                    // 'class' => 'btn btn-xs btn-default btn-primary',
                                                                    'data-toggle'=>"modal",
                                                                    'data-target'=>"#myModal",
                                                                    'data-title'=>"<i class='glyphicon glyphicon-th-list'></i>",]).'</h3>
                            
                                <div class="col-md-6">
                                    <strong><i class="glyphicon glyphicon-cog"></i> Informasi Akun </strong>
                                    <table class="table">                                
                                    <tr>
                                        <th>Username </th><td>'.$model->username.'</td>
                                    </tr>
                                    <tr>
                                        <th>Email</th><td>'.$model->email.'</td>
                                    </tr>
                                    <tr>
                                        <th>Status Akun</th><td>'.($model->status==10 ? '<span class="label label-success">Aktif</span>' : '<span class="label label-danger">Tidak Aktif</span>').'</td>
                                    </tr>
                                    <tr>
                                        <th>Tanggal Daftar </th><td>'.date("Y-m-d H:i:s", $model->created_at).'</td>
                                    </tr>
                                    <tr>
                                        <th>Tanggal Update</th><td>'.date("Y-m-d H:i:s", $model->updated_at).'</td>
                                    </tr>
                                    </table>
                                </div>
                                <div class="col-md-6">
                                    <strong><i class="glyphicon glyphicon-wrench"></i> Informasi Profil </strong>
                                    <table class="table">                                
                                    <tr>
                                        <th>Tempat, Tanggal lahir </th><td>'. @$model->userProfils->tempat_lahir.', '.(!empty($model->userProfils->tgl_lahir)? date('d M Y',strtotime(@$model->userProfils->tgl_lahir)): '') .'</td>
                                    </tr>
                                    <tr>
                                        <th>Jenis Kelamin </th><td>'.(!empty($model->userProfils->jenkel)?(@$model->userProfils->jenkel=='L'?'Laki-Laki':'Perempuan'):'').'</td>
                                    </tr>
                                    <tr>
                                        <th>Tinggi Badan</th><td>'.@$model->userProfils->tinggi_badan.'</td>
                                    </tr>
                                    <tr>
                                        <th>Berat Badan</th><td>'.@$model->userProfils->berat_badan.'</td>
                                    </tr>
                                    <tr>
                                        <th>Berat ideal</th><td>'.( !empty($model->userProfils) ? $model->userProfils->beratIdeal() : '').'</td>
                                    </tr>
                                    </table>
                                </div>                                    
                                    
                                
                            <div class="row">
                                <div class="col-md-4">'.
                                    Html::a('<i class="glyphicon glyphicon-search"></i> Lihat Detail', ['detail-data','id'=>$model->id], [
                                                            'class' => 'btn btn-primary btn-flat btn-block',
                                                            'data-toggle'=>"modal",
                                                            'data-target'=>"#myModal",
                                                            'data-title'=>"<i class='glyphicon glyphicon-search'></i>  DETAIL DATA",])
                                .'</div>
                                <div class="col-md-4">'.
                                    Html::a('<i class="glyphicon glyphicon-edit"></i>  Edit Data', ['update-data','id'=>$model->id], [
                                                            'class' => 'btn btn-primary btn-flat btn-block',
                                                            'data-toggle'=>"modal",
                                                            'data-target'=>"#myModal",
                                                            'data-title'=>"<i class='glyphicon glyphicon-edit'></i>  UPDATE DATA", ])
                        
                                .'</div>
                                <div class="col-md-4">'.
                                    Html::a('<i class="glyphicon glyphicon-trash"></i> Hapus Data', ['delete', 'id' => $model->id], [
                                            'class' => 'btn btn-danger btn-flat btn-block',
                                            'id'=>'delete-gridview',
                                            'data' => [
                                                'confirm' => 'Apa Anda Yakin Akan Menghapus Data Ini?',
                                                'method' => 'post',
                                            ],
                                     ])
                                .'</div>                                
                                </div>
                            </div>
                        </div>
                        <hr>';             
                        return $v;            
        },
    ]) ?>
<?php Pjax::end() ?>
</div>
</div>
<?php Panel::end(); ?>