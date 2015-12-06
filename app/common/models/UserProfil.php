<?php

namespace common\models;

use Yii;
use yii\helpers\ArrayHelper;
/**
 * This is the model class for table "user_profil".
 *
 * @property string $id
 * @property integer $user_id
 * @property string $nama
 * @property string $jenkel
 * @property string $tempat_lahir
 * @property integer $agama_id
 * @property double $tinggi_badan
 * @property double $berat_badan
 * @property string $tgl_lahir
 * @property string $alamat
 * @property string $no_telp
 * @property string $created_at
 * @property integer $updated_by
 * @property string $updated_date
 *
 * @property UserAgama $agama
 * @property User $user
 */
class UserProfil extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    /*$jenkel=NULL;
    $tinggi_badan=NULL;
    $berat_badan=NULL;*/
    public static function tableName()
    {
        return 'user_profil';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'agama_id', 'updated_by'], 'integer'],
            [['jenkel', 'alamat'], 'string'],
            [['tinggi_badan', 'berat_badan'], 'number'],
            [['foto','tgl_lahir', 'created_at', 'updated_date'], 'safe'],
            [['nama'], 'string', 'max' => 50],
            // [['foto'], 'string', 'max' => 30],
            [['tempat_lahir'], 'string', 'max' => 30],
            [['no_telp'], 'string', 'max' => 12],
            [['foto'], 'file', 'extensions'=>'jpg, gif, png'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'Username',
            'nama' => 'Nama Lengkap',
            'jenkel' => 'Jenis kelamin',
            'tempat_lahir' => 'Tempat Lahir',
            'agama_id' => 'Agama',
            'tinggi_badan' => 'Tinggi Badan',
            'berat_badan' => 'Berat Badan',
            'tgl_lahir' => 'Tanggal Lahir',
            'alamat' => 'Alamat',
            'no_telp' => 'No Telp',
            'foto' => 'Foto',
            'created_at' => 'Created At',
            'updated_by' => 'Updated By',
            'updated_date' => 'Updated Date',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAgama()
    {
        return $this->hasOne(\backend\models\Agama::className(), ['id' => 'agama_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }


    public function listUser(){
        $data = ArrayHelper::map(User::find()->all(),'id','username');    
        return $data;
    }

    public function listAgama(){
        $data = ArrayHelper::map(\backend\models\Agama::find()->where(['status'=>1])->all(),'id','name');    
        return $data;
    }

     public function beratIdealDetil($j,$bb,$tb){
        
        if(empty($j)){
            $ret= 1;
        }else{
        
            $jk= !empty($j) ? $j : '';
            $t_badan= !empty($tb) ? $tb : 0;
            $b_badan= !empty($bb) ? $bb : 0 ;
            $brtideal='-';

            if($jk='L'){
                $brtideal=($t_badan-100)-(10/100*($t_badan-100)).' kg';
            }elseif ($jk='P') {
                $brtideal=($t_badan-100)-(15/100*($t_badan-100)).' kg';
            }else{
                $brtideal='-';
            }
                $ret= $brtideal;                
        }

        return  $ret;    
            
    }

    public function beratIdeal(){
        
        if(empty($this->jenkel)){
            $ret= 1;
        }else{
        
            $jk= !empty($this->jenkel) ? $this->jenkel : '';
            $t_badan= !empty($this->tinggi_badan) ? $this->tinggi_badan : 0;
            $b_badan= !empty($this->berat_badan) ? $this->berat_badan : 0 ;
            $brtideal='-';

            if($jk='L'){
                $brtideal=($t_badan-100)-(10/100*($t_badan-100)).' kg';
            }elseif ($jk='P') {
                $brtideal=($t_badan-100)-(15/100*($t_badan-100)).' kg';
            }else{
                $brtideal='-';
            }
                $ret= $brtideal;                
        }

        return  $ret;    
            
    }

}
