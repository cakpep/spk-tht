<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\DetailView;

?>
<style type="text/css">
.modal.in .modal-dialog {
    width: 80%;

}
</style>

<div class="user-view">
    <div class="row">
        <div class="col-md-6">
            <?= DetailView::widget([
                'model' => $model,
                'attributes' => [
                    'id',
                    'username',
                    'auth_key',
                    'password_hash',
                    'password_reset_token',
                    'email:email',
                    'status',
                    'created_at',
                    'updated_at',
                    'confirmed_at',
                ],
            ]) ?>
        </div>
        <div class="col-md-6">
        

       <?php
       if(!empty($profil)){

       echo DetailView::widget([
            'model' => $profil,
            'attributes' => [
                'id',            
                [
                    'attribute'=>'user_id',                                
                    'value'=>!empty($profil->user_id) ? $profil->user->username : '-',
                ],
                'nama',
                'jenkel',
                'tempat_lahir',
                
                [
                    'attribute'=>'agama_id',                                
                    'value'=>!empty($profil->agama_id) ? $profil->agama->name : '-',
                ],
                'tinggi_badan',
                'berat_badan',
                [
                    'attribute'=>'tinggi_badan',  
                    'label'=>'Berat Badan Ideal',
                    // 'value'=>'',
                    'value'=>!empty($profil->beratIdeal()) ? $profil->beratIdeal() : '',
                    // 'value'=>$profil->beratIdealDetil($profil->jenkel,$profil->tinggi_badan,$profil->berat_badan ),

                ],
                [
                    'attribute'=>'tgl_lahir',                                
                    'value'=>!empty($profil->tgl_lahir) ? date('d M Y',strtotime($profil->tgl_lahir)) : '',
                ],
                
                'alamat:ntext',
                'no_telp',
                [
                    'attribute'=>'foto',                
                    'value'=> !empty($profil->foto) ? Url::to('@web').'/../uploads/foto_profil/'.$profil->foto : Url::to('@web').'/../uploads/foto_profil/images.png',                       
                    'format' => ['image',['width'=>'100','height'=>'100']],
                ],
                
                
            ],
        ]); 
    }else{
        echo '<p><h3>profil belum diisi</h3></p>';
    }
    ?>
        </div>
    </div>
    
</div>