<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "user_agama".
 *
 * @property integer $id
 * @property string $name
 * @property integer $status
 * @property string $created
 * @property integer $createdBy
 * @property string $modified
 * @property integer $modifiedBy
 * @property string $deleted
 * @property integer $deletedBy
 *
 * @property UserProfil[] $userProfils
 */
class Agama extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user_agama';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'name'], 'required'],
            [['id', 'status', 'createdBy', 'modifiedBy'], 'integer'],
            [['created', 'modified'], 'safe'],
            [['name'], 'string', 'max' => 255],
            [['name'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Nama Agama',
            'status' => 'Status',
            'created' => 'Created',
            'createdBy' => 'Created By',
            'modified' => 'Modified',
            'modifiedBy' => 'Modified By',
            'deleted' => 'Deleted',
            'deletedBy' => 'Deleted By',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUserProfils()
    {
        return $this->hasMany(UserProfil::className(), ['agama_id' => 'id']);
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
