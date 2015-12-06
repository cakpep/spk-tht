<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "penyakit_jenis".
 *
 * @property integer $id
 * @property string $nama_jenis
 * @property integer $status
 * @property integer $created_by
 * @property string $created_date
 * @property integer $updated_by
 * @property string $updated_date
 *
 * @property Penyakit[] $penyakits
 */
class PenyakitJenis extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'penyakit_jenis';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['status', 'created_by', 'updated_by'], 'integer'],
            [['created_date', 'updated_date'], 'safe'],
            [['nama_jenis'], 'string', 'max' => 30]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama_jenis' => 'Nama Jenis Penyakit',
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
    public function getPenyakits()
    {
        return $this->hasMany(Penyakit::className(), ['penyakit_jenis_id' => 'id']);
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
