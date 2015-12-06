<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\DiagnosaUncertantyTerm;

class DiagnosaUncertantyTermSearch extends DiagnosaUncertantyTerm
{
    
    public $srch_all;

    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['uncertanty_term','srch_all'], 'safe'],
            [['cf'], 'number'],
        ];
    }

    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = DiagnosaUncertantyTerm::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'sort'=> [
                'defaultOrder' => [
                    'id' => 'DESC'
                ]
            ],
            'pagination'=> [
                'defaultPageSize' => 20
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

        $query->andFilterWhere([
            'id' => $this->id,
            'cf' => $this->cf,
        ]);

        */

        $query->orFilterWhere(['like', 'uncertanty_term', $this->srch_all])
              ->orFilterWhere(['like', 'cf', $this->srch_all]);

        return $dataProvider;
    }
}
