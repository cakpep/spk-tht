<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "wil_country".
 *
 * @property integer $countryid
 * @property string $countrycode
 * @property string $countryname
 * @property integer $recordstatus
 *
 * @property WilCurrency[] $wilCurrencies
 * @property WilProvince[] $wilProvinces
 */
class Country extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'wil_country';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['countrycode', 'countryname', 'recordstatus'], 'required'],
            [['recordstatus'], 'integer'],            
            [['countryflag'], 'string', 'max' => 50],
            [['countrycode'], 'string', 'max' => 5],
            [['countryname'], 'string', 'max' => 50],
            [['countrycode'], 'unique'],
            [['countryname'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'countryid' => 'Countryid',
            'countrycode' => 'Countrycode',
            'countryname' => 'Countryname',
            'recordstatus' => 'Recordstatus',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWilCurrencies()
    {
        return $this->hasMany(WilCurrency::className(), ['countryid' => 'countryid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWilProvinces()
    {
        return $this->hasMany(WilProvince::className(), ['countryid' => 'countryid']);
    }
}
