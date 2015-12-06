<?php
namespace common\models;

use Yii;
use yii\base\Model;


class ChangePassword extends Model
{
    public $password_lama;
    public $password_ulang;
    public $password;

    
    public function rules()
    {
        return [
            [['password_lama', 'password_ulang','password'], 'required'],
            [['password_ulang'], 'compare', 'compareAttribute' => 'password'],     
            ['password_lama', 'validatePassword','on'=>'changepassword'],
            ['password', 'string', 'min' => 6],                        
        ];
    }

    public function validasiPassword($attribute, $params)
    {
        $user = User::findOne(Yii::$app->user->id);
        if (!$this->hasErrors()) {
            if (Yii::$app->security->validatePassword($this->password_lama, $user->password_hash)!==1) {                
                $this->addError($attribute, 'New password must be different than the old one.');                
            }
        }
     
    }

    public function validatePassword($attribute, $params)
    {        
            $user = $this->getUser();
            // if (!empty($user->validatePassword($this->password))) {
            if(Yii::$app->security->validatePassword('12345',Yii::$app->security->generatePasswordHash('123456')))
            {
                $this->addError($attribute, 'Incorrect username or password.');
            }        
    }

}
