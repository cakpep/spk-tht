<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "penyakit_gejala".
 *
 * @property integer $id
 * @property string $nama_gejala
 * @property string $ket
 * @property integer $created_by
 * @property string $created_date
 * @property integer $updated_by
 * @property string $updated_date
 *
 * @property Diagnosa[] $diagnosas
 * @property Penyakit[] $penyakits
 */
class PenyakitGejala extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'penyakit_gejala';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ket'], 'string'],
            [['status','created_by', 'updated_by'], 'integer'],
            [['created_date', 'updated_date'], 'safe'],
            [['nama_gejala'], 'string', 'max' => 75]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama_gejala' => 'Nama Gejala',
            'ket' => 'Keteragan',
            'status'=>'Status',
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
        return $this->hasMany(Diagnosa::className(), ['gejala_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPenyakits()
    {
        return $this->hasMany(Penyakit::className(), ['id' => 'penyakit_id'])->viaTable('diagnosa', ['gejala_id' => 'id']);
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
