<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\karyawan;

/**
 * KaryawanSearch represents the model behind the search form of `app\models\karyawan`.
 */
class KaryawanSearch extends karyawan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_Karyawan'], 'integer'],
            [['Nama_Karyawan', 'Alamat', 'Posisi'], 'safe'],
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
        $query = karyawan::find();

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
            'id_Karyawan' => $this->id_Karyawan,
        ]);

        $query->andFilterWhere(['like', 'Nama_Karyawan', $this->Nama_Karyawan])
            ->andFilterWhere(['like', 'Alamat', $this->Alamat])
            ->andFilterWhere(['like', 'Posisi', $this->Posisi]);

        return $dataProvider;
    }
}
