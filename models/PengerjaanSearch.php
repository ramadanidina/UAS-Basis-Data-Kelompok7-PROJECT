<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\pengerjaan;

/**
 * PengerjaanSearch represents the model behind the search form of `app\models\pengerjaan`.
 */
class PengerjaanSearch extends pengerjaan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_Pengerjaan', 'KARYAWAN_id_Karyawan'], 'integer'],
            [['Tgl_Mulai', 'Tgl_Selesai'], 'safe'],
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
        $query = pengerjaan::find();

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
            'id_Pengerjaan' => $this->id_Pengerjaan,
            'Tgl_Mulai' => $this->Tgl_Mulai,
            'Tgl_Selesai' => $this->Tgl_Selesai,
            'KARYAWAN_id_Karyawan' => $this->KARYAWAN_id_Karyawan,
        ]);

        return $dataProvider;
    }
}
