<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\UserProfil;

class UserProfilSearch extends UserProfil
{
    
    public $srch_all;
    public $status;

    public function rules()
    {
        return [
            [['status','id', 'user_id', 'agama_id', 'updated_by'], 'integer'],
            [['nama', 'jenkel', 'tempat_lahir', 'tgl_lahir', 'alamat', 'no_telp', 'foto', 'created_at', 'updated_date'], 'safe'],
            [['srch_all','tinggi_badan', 'berat_badan'], 'number'],
        ];
    }

    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = UserProfil::find();

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
            'agama'=> function ($q){
                $q->from('user_agama a');  // join with tabel alias
            }
        ]);
        $dataProvider->query->joinWith([
            'user'=> function ($q){
                $q->from('user u');  // join with tabel alias
            }
        ]);
     
        $query->orFilterWhere(['like', 'a.name', $this->srch_all])
              ->orFilterWhere(['like', 'u.username', $this->srch_all])
              ->orFilterWhere(['like', 'nama', $this->srch_all])
            ->orFilterWhere(['like', 'jenkel', $this->srch_all])
            ->orFilterWhere(['like', 'tempat_lahir', $this->srch_all])
            ->orFilterWhere(['like', 'alamat', $this->srch_all])
            ->orFilterWhere(['like', 'no_telp', $this->srch_all])
            ->orFilterWhere(['like', 'tinggi_badan', $this->srch_all])
            ->orFilterWhere(['like', 'berat_badan', $this->srch_all])
            ->orFilterWhere(['like', 'tgl_lahir', $this->srch_all]);
        

        $query->andFilterWhere([
            'user_id' => $this->user_id,
            'u.status' => $this->status,
            'agama_id' => $this->agama_id,            
        ]);


        return $dataProvider;
    }
}
