<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Penyakit;

class PenyakitSearch extends Penyakit
{
    
    public $srch_all;

    public function rules()
    {
        return [
            [['id', 'penyakit_jenis_id', 'status', 'created_by', 'updated_by'], 'integer'],
            [['srch_all','nama_penyakit', 'ket', 'created_date', 'updated_date'], 'safe'],
        ];
    }

    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = Penyakit::find();

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

        
        $dataProvider->query->joinWith([
            'penyakitJenis'=> function ($q){
                $q->from('penyakit_jenis pj');  // join with tabel alias
            }
        ]);
     
        $query->andFilterWhere([
            'penyakit.status' => $this->status,            
        ]);

        $query->orFilterWhere(['like', 'nama_penyakit', $this->srch_all])
            ->orFilterWhere(['like', 'ket', $this->srch_all])
            ->orFilterWhere(['like', 'pj.nama_jenis', $this->srch_all]);

        return $dataProvider;
    }
}
