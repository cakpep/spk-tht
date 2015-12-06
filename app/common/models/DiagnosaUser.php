<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "diagnosa_user".
 *
 * @property integer $id
 * @property integer $user_id
 * @property integer $gejala_id
 * @property string $diagnosa_date
 *
 * @property User $user
 * @property PenyakitGejala $gejala
 */
class DiagnosaUser extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'diagnosa_user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id',], 'integer'],
            [['diagnosa_date'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'Nama',            
            'diagnosa_date' => 'Tanggal Diagnosa',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    /*public function getGejala()
    {
        return $this->hasOne(\backend\models\PenyakitGejala::className(), ['id' => 'gejala_id']);
    }*/
}
