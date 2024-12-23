<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\project;

/**
 * ProjectSearch represents the model behind the search form of `app\models\project`.
 */
class ProjectSearch extends project
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_Project', 'CLIENT_id_Client', 'KARYAWAN_id_Karyawan'], 'integer'],
            [['Jenis_Project', 'Nama_Client', 'Tgl_Masuk', 'Harga'], 'safe'],
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
        $query = project::find();

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
            'id_Project' => $this->id_Project,
            'Tgl_Masuk' => $this->Tgl_Masuk,
            'CLIENT_id_Client' => $this->CLIENT_id_Client,
            'KARYAWAN_id_Karyawan' => $this->KARYAWAN_id_Karyawan,
        ]);

        $query->andFilterWhere(['like', 'Jenis_Project', $this->Jenis_Project])
            ->andFilterWhere(['like', 'Nama_Client', $this->Nama_Client])
            ->andFilterWhere(['like', 'Harga', $this->Harga]);

        return $dataProvider;
    }
}
