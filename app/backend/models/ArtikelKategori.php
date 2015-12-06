<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "artikel_kategori".
 *
 * @property integer $id
 * @property string $nama
 * @property string $ket
 * @property integer $created_by
 * @property string $created_date
 * @property integer $updated_by
 * @property string $updated_date
 *
 * @property Artikel[] $artikels
 */
class ArtikelKategori extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'artikel_kategori';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama', 'ket'], 'string'],
            [['status','created_by', 'updated_by'], 'integer'],
            [['created_date', 'updated_date'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama' => 'Nama Kategori Artikel',
            'status'=>'Status',
            'ket' => 'Keterangan',
            'created_by' => 'Created By',
            'created_date' => 'Created Date',
            'updated_by' => 'Updated By',
            'updated_date' => 'Updated Date',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getArtikels()
    {
        return $this->hasMany(Artikel::className(), ['kategori_id' => 'id']);
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
