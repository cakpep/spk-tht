<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use yii\data\SqlDataProvider;
use common\models\DiagnosaUser;

/**
 * DiagnosaUserSearch represents the model behind the search form about `common\models\DiagnosaUser`.
 */
class DiagnosaUserSearch extends DiagnosaUser
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'user_id','diagnosa_ke'], 'integer'],
            [['diagnosa_date'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    
    public function search($params)
    {
        $query = DiagnosaUser::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }


        /*$dataProvider->query->joinWith([
            'gejala'=> function ($q){
                $q->from('penyakit_gejala pg');  // join with tabel alias
            }
        ]);
     
        $query->andFilterWhere(['like', 'pg.nama_gejala', $this->gejala_id]);        */
        // SELESAI EDIT DISINI
        

        $query->andFilterWhere([
            'id' => $this->id,
            'user_id' => $this->user_id,
            'diagnosa_ke'=> $this->diagnosa_ke,            
            'diagnosa_date' => $this->diagnosa_date,
        ]);

        return $dataProvider;
    }

    public function dataRekamDiagnosa(){
        
        $user=Yii::$app->user->id;

        $count = Yii::$app->db->createCommand('SELECT COUNT(DISTINCT(diagnosa_ke))  FROM  diagnosa_user WHERE user_id=:user_id GROUP BY  diagnosa_ke', [':user_id' => $user])->execute();

        $dataProvider = new SqlDataProvider([
            'sql' => 'SELECT *  FROM  diagnosa_user WHERE user_id=:user_id GROUP BY  diagnosa_ke',
            'params' => [':user_id' => $user],
            'totalCount' => $count,
            'sort' => [
                'attributes' => [
                    'diagnosa_ke',                        
                    /*'name' => [
                        'asc' => ['first_name' => SORT_ASC, 'last_name' => SORT_ASC],
                        'desc' => ['first_name' => SORT_DESC, 'last_name' => SORT_DESC],
                        'default' => SORT_DESC,
                        'label' => 'Name',
                    ],*/
                ],
            ],
            'pagination' => [
                'pageSize' => 20,
            ],
        ]);

        // get the user records in the current page
        $models = $dataProvider->getModels();

        return $dataProvider;
    }

   
}
