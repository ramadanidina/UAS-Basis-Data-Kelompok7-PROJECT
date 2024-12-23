<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\negosiasi;

/**
 * NegosiasiSearch represents the model behind the search form of `app\models\negosiasi`.
 */
class NegosiasiSearch extends negosiasi
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_Negosiasi', 'CLIENT_id_Client', 'KARYAWAN_id_Karyawan'], 'integer'],
            [['Tgl_Menghubungi', 'Media_Hubung'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = negosiasi::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id_Negosiasi' => $this->id_Negosiasi,
            'Tgl_Menghubungi' => $this->Tgl_Menghubungi,
            'CLIENT_id_Client' => $this->CLIENT_id_Client,
            'KARYAWAN_id_Karyawan' => $this->KARYAWAN_id_Karyawan,
        ]);

        $query->andFilterWhere(['like', 'Media_Hubung', $this->Media_Hubung]);

        return $dataProvider;
    }
}
