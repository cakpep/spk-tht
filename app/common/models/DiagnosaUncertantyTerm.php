<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "diagnosa_uncertanty_term".
 *
 * @property integer $id
 * @property string $uncertanty_term
 * @property double $cf
 */
class DiagnosaUncertantyTerm extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'diagnosa_uncertanty_term';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cf'], 'number'],
            [['uncertanty_term'], 'string', 'max' => 35]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'uncertanty_term' => 'Uncertanty Term',
            'cf' => 'Cf',
        ];
    }
}
