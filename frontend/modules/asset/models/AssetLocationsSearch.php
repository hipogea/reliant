<?php

namespace frontend\modules\asset\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\modules\asset\models\AssetLocations;

/**
 * AssetLocationsSearch represents the model behind the search form of `frontend\modules\asset\models\AssetLocations`.
 */
class AssetLocationsSearch extends AssetLocations
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['ismovil', 'cc', 'codcen', 'istop', 'parent_id', 'nombre', 'path', 'activo', 'detalle'], 'safe'],
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
        $query = AssetLocations::find();

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
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'ismovil', $this->ismovil])
            ->andFilterWhere(['like', 'cc', $this->cc])
            ->andFilterWhere(['like', 'codcen', $this->codcen])
            ->andFilterWhere(['like', 'istop', $this->istop])
            ->andFilterWhere(['like', 'parent_id', $this->parent_id])
            ->andFilterWhere(['like', 'nombre', $this->nombre])
            ->andFilterWhere(['like', 'path', $this->path])
            ->andFilterWhere(['like', 'activo', $this->activo])
            ->andFilterWhere(['like', 'detalle', $this->detalle]);

        return $dataProvider;
    }
}
