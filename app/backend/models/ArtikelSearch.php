<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Artikel;

class ArtikelSearch extends Artikel
{
    
    public $srch_all;

    public function rules()
    {
        return [
            [['id', 'kategori_id', 'created_by', 'updated_by'], 'integer'],
            [['srch_all','judul', 'isi', 'foto_artikel', 'creaed_date', 'updated_date'], 'safe'],
        ];
    }

    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = Artikel::find();

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
            'kategori'=> function ($q){
                $q->from('artikel_kategori ak');  // join with tabel alias
            }
        ]);
     
        $query->orFilterWhere(['like', 'ak.nama', $this->srch_all]);
        // $query->andFilterWhere(['like', 'tb_group2.name', $this->parent_id]);
        // SELESAI EDIT DISINI
        

        /*$query->andFilterWhere([
            'id' => $this->id,
            'kategori_id' => $this->kategori_id,
            'created_by' => $this->created_by,
            'creaed_date' => $this->creaed_date,
            'updated_by' => $this->updated_by,
            'updated_date' => $this->updated_date,
        ]);
*/
        $query->orFilterWhere(['like', 'judul', $this->srch_all])
            ->orFilterWhere(['like', 'isi', $this->srch_all]);

        return $dataProvider;
    }
}
