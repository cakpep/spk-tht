<?php

namespace common\models;

use Yii;
use yii\helpers\ArrayHelper;
use yii\db\Query;
/**
 * This is the model class for table "artikel".
 *
 * @property integer $id
 * @property string $judul
 * @property integer $kategori_id
 * @property string $isi
 * @property integer $created_by
 * @property string $creaed_date
 * @property integer $updated_by
 * @property string $updated_date
 *
 * @property ArtikelKategori $kategori
 */
class Artikel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'artikel';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['kategori_id', 'created_by', 'updated_by'], 'integer'],
            [['isi'], 'string'],
            [['foto_artikel','creaed_date', 'updated_date'], 'safe'],
            [['judul'], 'string', 'max' => 100],
            [['foto_artikel'], 'file', 'extensions'=>'jpg, gif, png'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'judul' => 'Judul Artikel',
            'kategori_id' => 'Kategori Artikel',
            'isi' => 'Isi Artikel',
            'foto_artikel'=>'Foto Artikel',
            'created_by' => 'Created By',
            'creaed_date' => 'Creaed Date',
            'updated_by' => 'Updated By',
            'updated_date' => 'Updated Date',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKategori()
    {
        return $this->hasOne(\backend\models\ArtikelKategori::className(), ['id' => 'kategori_id']);
    }

     public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'created_by']);
    }

    public function getArtikelKomentars()
    {
        return $this->hasMany(\frontend\models\ArtikelKomentar::className(), ['artikel_id' => 'id']);
    }



    public function listArtikelKategori(){
        $data = ArrayHelper::map(\backend\models\ArtikelKategori::find()->all(),'id','nama');    
        return $data;
    }

    public function komentarTerbanyak($limit=3){
        
       $connection = \Yii::$app->db;
       $query="SELECT a.*,COUNT(ak.`artikel_id`) AS jum_koment,aka.`nama` AS kategori,u.`username`
                FROM artikel a 
                JOIN artikel_komentar ak ON a.`id`=ak.`artikel_id` 
                JOIN artikel_kategori aka ON a.`kategori_id`=aka.`id`
                JOIN USER u ON u.`id`=a.`created_by`

                GROUP BY ak.`artikel_id`
                ORDER BY jum_koment DESC
                LIMIT $limit";

       $model = $connection->createCommand($query);
       $data = $model->queryAll();

       return $data;

    }
}
