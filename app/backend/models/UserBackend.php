<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property integer $id
 * @property string $username
 * @property string $auth_key
 * @property string $password_hash
 * @property string $password_reset_token
 * @property string $email
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $confirmed_at
 *
 * @property ArtikelKomentar[] $artikelKomentars
 * @property DiagnosaUser[] $diagnosaUsers
 * @property UserProfil[] $userProfils
 */
class UserBackend extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'auth_key', 'password_hash', 'email', 'created_at', 'updated_at'], 'required'],
            [['status', 'created_at', 'updated_at', 'confirmed_at'], 'integer'],
            [['username', 'password_hash', 'password_reset_token', 'email'], 'string', 'max' => 255],
            [['auth_key'], 'string', 'max' => 32],
            ['username', 'string', 'min' => 2, 'max' => 255],
            ['username', 'unique', 'targetAttribute' => 'username', 'message' => 'Username sudah pernah didaftarkan.'],
            ['email', 'email'],
            ['email', 'unique', 'targetClass' => '\common\models\User', 'message' => 'Maaf Email sudah terdaftar.']

        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'auth_key' => 'Auth Key',
            'password_hash' => 'Password Hash',
            'password_reset_token' => 'Password Reset Token',
            'email' => 'Email',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'confirmed_at' => 'Confirmed At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getArtikelKomentars()
    {
        return $this->hasMany(ArtikelKomentar::className(), ['user_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDiagnosaUsers()
    {
        return $this->hasMany(DiagnosaUser::className(), ['user_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUserProfils()
    {
        return $this->hasOne(\common\models\UserProfil::className(), ['user_id' => 'id']);
    }


    public function signup()
    {
        if ($this->validate()) {
            $user = new \common\models\User();
            $user->username = $this->username;
            $user->email = $this->email;
            $user->setPassword('123456');
            $user->generateAuthKey();
            $user->status = 10; 
            if ($user->save()) {                
                return $user;
            }
        }

        return null;
    }
}
