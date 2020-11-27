<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Barang;

/**
 * BarangSearch represents the model behind the search form of `backend\models\Barang`.
 */
class BarangSearch extends Barang
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_barang', 'quantity', 'harga', 'stock'], 'integer'],
            [['nama', 'deskripsi', 'merek', 'model', 'kondisi_barang', 'image', 'create_at'], 'safe'],
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
        $query = Barang::find();

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
            'id_barang' => $this->id_barang,
            'quantity' => $this->quantity,
            'harga' => $this->harga,
            'stock' => $this->stock,
            'create_at' => $this->create_at,
        ]);

        $query->andFilterWhere(['like', 'nama', $this->nama])
            ->andFilterWhere(['like', 'deskripsi', $this->deskripsi])
            ->andFilterWhere(['like', 'merek', $this->merek])
            ->andFilterWhere(['like', 'model', $this->model])
            ->andFilterWhere(['like', 'kondisi_barang', $this->kondisi_barang])
            ->andFilterWhere(['like', 'image', $this->image]);

        return $dataProvider;
    }
}
