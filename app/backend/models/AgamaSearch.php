<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Agama;

class AgamaSearch extends Agama
{
    
    public $srch_all;

    public function rules()
    {
        return [
            [['id', 'status', 'createdBy', 'modifiedBy'], 'integer'],
            [['srch_all','name', 'created', 'modified'], 'safe'],
        ];
    }

    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = Agama::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'sort'=> [
                'defaultOrder' => [
                    'id' => 'DESC'
                ]
            ],
            'pagination'=> [
                'defaultPageSize' => 10
            ]
        ]);

        $this->load($params);
        if (!$this->validate()) {
            $query->where('1=0');
            return $dataProvider;
        }

        /*
        $dataProvider->query->joinWith([
            'parentGroup'=> function ($q){
                $q->from('tb_group tb_group2');  // join with tabel alias
            }
        ]);
     
        $query->andFilterWhere(['like', 'tb_group.name', $this->name]);
        $query->andFilterWhere(['like', 'tb_group2.name', $this->parent_id]);
        // SELESAI EDIT DISINI
        */

        $query->andFilterWhere([        
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'name', $this->srch_all]);

        return $dataProvider;
    }
}
