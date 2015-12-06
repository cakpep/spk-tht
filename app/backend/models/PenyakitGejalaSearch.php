<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\PenyakitGejala;

class PenyakitGejalaSearch extends PenyakitGejala
{
    
    public $srch_all;

    public function rules()
    {
        return [
            [['status','id', 'created_by', 'updated_by'], 'integer'],
            [['srch_all','nama_gejala', 'ket', 'created_date', 'updated_date'], 'safe'],
        ];
    }

    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = PenyakitGejala::find();

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


        $query->orFilterWhere(['like', 'nama_gejala', $this->srch_all])
            ->orFilterWhere(['like', 'ket', $this->srch_all]);

        return $dataProvider;
    }
}
