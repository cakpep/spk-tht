<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "penyakit".
 *
 * @property integer $id
 * @property string $nama_penyakit
 * @property string $ket
 * @property integer $penyakit_jenis_id
 * @property integer $status
 * @property integer $created_by
 * @property string $created_date
 * @property integer $updated_by
 * @property string $updated_date
 *
 * @property Diagnosa[] $diagnosas
 * @property PenyakitGejala[] $gejalas
 * @property PenyakitJenis $penyakitJenis
 */
class Penyakit extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'penyakit';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ket'], 'string'],
            [['penyakit_jenis_id', 'status', 'created_by', 'updated_by'], 'integer'],
            [['created_date', 'updated_date'], 'safe'],
            [['nama_penyakit'], 'string', 'max' => 75]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama_penyakit' => 'Nama Penyakit',
            'ket' => 'Keterangan',
            'penyakit_jenis_id' => 'Jenis Penyakit',
            'status' => 'Status',
            'created_by' => 'Created By',
            'created_date' => 'Created Date',
            'updated_by' => 'Updated By',
            'updated_date' => 'Updated Date',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDiagnosas()
    {
        return $this->hasMany(Diagnosa::className(), ['penyakit_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGejalas()
    {
        return $this->hasMany(PenyakitGejala::className(), ['id' => 'gejala_id'])->viaTable('diagnosa', ['penyakit_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPenyakitJenis()
    {
        return $this->hasOne(PenyakitJenis::className(), ['id' => 'penyakit_jenis_id']);
    }

    public static function listJenisPenyakit(){
        $data = ArrayHelper::map(PenyakitJenis::find()
                                                    ->where(['status'=>1])
                                                    ->all(),'id','nama_jenis');    
        return $data;
    }
    
    public function status($data){
        
        if($data==1){
            $ret='Aktif';
        }elseif ($data==0) {
            $ret='Tidak Aktif';
        }else{
            $ret='-';
        }
        return $ret;
    }
}
