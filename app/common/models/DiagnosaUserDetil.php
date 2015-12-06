<?php

namespace common\models;

use Yii;
use yii\data\ActiveDataProvider;
use yii\data\SqlDataProvider;

/**
 * This is the model class for table "diagnosa_user_detil".
 *
 * @property integer $id
 * @property integer $diagnosa_user_id
 * @property integer $gejala_id
 *
 * @property DiagnosaUser $diagnosaUser
 * @property PenyakitGejala $gejala
 */
class DiagnosaUserDetil extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'diagnosa_user_detil';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['diagnosa_user_id', 'gejala_id'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'diagnosa_user_id' => 'Diagnosa User ID',
            'gejala_id' => 'Gejala ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDiagnosaUser()
    {
        return $this->hasOne(DiagnosaUser::className(), ['id' => 'diagnosa_user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGejala()
    {
        return $this->hasOne(PenyakitGejala::className(), ['id' => 'gejala_id']);
    }


    public function dataRekamDiagnosa($ke){
        
        $user=Yii::$app->user->id;

        // $count = Yii::$app->db->createCommand('SELECT count(id)  FROM  diagnosa_user_detil', [':user_id' => $user])->execute();
        $count = Yii::$app->db->createCommand('SELECT count(id)  FROM  diagnosa_user_detil')->execute();

        $sql = "SELECT 
                dud.`diagnosa_user_id`,
                du.`user_id`,
                du.`diagnosa_ke`,
                du.`diagnosa_date`,
                dud.`gejala_id`,
                pg.`nama_gejala`
                FROM diagnosa_user_detil dud 
                JOIN penyakit_gejala pg ON dud.`gejala_id`=pg.`id`
                JOIN diagnosa_user du ON du.`id`=dud.`diagnosa_user_id`
                where du.`user_id`=:user_id and du.`diagnosa_ke`=:ke
                #ORDER BY du.`id`,dud.`gejala_id`";

        $dataProvider = new SqlDataProvider([
            'sql' => $sql,
            'params' => [':user_id' => $user,':ke'=>$ke],
            'totalCount' => $count,
            'sort' => [
                'attributes' => [
                    'diagnosa_ke',
                    'nama_gejala',                       
                    /*'name' => [
                        'asc' => ['first_name' => SORT_ASC, 'last_name' => SORT_ASC],
                        'desc' => ['first_name' => SORT_DESC, 'last_name' => SORT_DESC],
                        'default' => SORT_DESC,
                        'label' => 'Name',
                    ],*/
                ],
            ],
            'pagination' => [
                'pageSize' => 5,
            ],
        ]);

        // get the user records in the current page
        $models = $dataProvider->getModels();

        return $dataProvider;
    }
}
