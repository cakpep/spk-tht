<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Diagnosa;

class DiagnosaSearch extends Diagnosa
{
    
    public $srch_all;

    public function rules()
    {
        return [
            [['penyakit_id', 'gejala_id', 'created_by', 'updated_by'], 'integer'],
            [['mb', 'md'], 'number'],
            [['srch_all','created_date', 'updated_date'], 'safe'],
        ];
    }

    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = Diagnosa::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'sort'=> [
                'defaultOrder' => [
                    'penyakit_id' => 'DESC',
                    'gejala_id' => 'DESC'
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
            'penyakit'=> function ($q){
                $q->from('penyakit p');  // join with tabel alias
            }
        ]);
        $dataProvider->query->joinWith([
            'gejala'=> function ($q){
                $q->from('penyakit_gejala pg');  // join with tabel alias
            }
        ]);
     
        $query->orFilterWhere(['like', 'p.nama_penyakit', $this->srch_all])
                ->orFilterWhere(['like', 'pg.nama_gejala', $this->srch_all])
                ->orFilterWhere(['like', 'mb', $this->srch_all])
                ->orFilterWhere(['like', 'md', $this->srch_all]);
        // SELESAI EDIT DISINI
        

        
        return $dataProvider;
    }
}
