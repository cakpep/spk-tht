<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "artikel_komentar".
 *
 * @property integer $artikel_id
 * @property integer $user_id
 * @property string $komentar
 * @property integer $komentar_oleh
 * @property string $komentar waktu
 *
 * @property Artikel $artikel
 * @property User $user
 */
class ArtikelKomentar extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'artikel_komentar';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['artikel_id', 'user_id', 'komentar_oleh'], 'integer'],
            [['komentar'], 'string'],
            [['komentar_waktu'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'artikel_id' => 'Artikel ID',
            'user_id' => 'User ID',
            'komentar' => 'Komentar',
            'komentar_oleh' => 'Komentar Oleh',
            'komentar_waktu' => 'Komentar Waktu',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getArtikel()
    {
        return $this->hasOne(Artikel::className(), ['id' => 'artikel_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(\common\models\User::className(), ['id' => 'user_id']);
    }

   
}
