<?php

namespace common\models\config;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\config\Parametroscentros;

/**
 * CentrosparametrosSearch represents the model behind the search form of `common\models\masters\Centrosparametros`.
 */
class ParametroscentrosSearch extends Parametroscentros
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['codparam', 'codcen', 'codocu','codparam', 'valor', 'valor2'], 'safe'],
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
        $query = Parametroscentros::find();

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

        $query->andFilterWhere(['like', 'codparam', $this->codparam])
            ->andFilterWhere(['like', 'codcen', $this->codcen])
            ->andFilterWhere(['like', 'valor', $this->valor]);

        return $dataProvider;
    }
    
     public function searchByCenter($params,$filter)
    {
        $query = Parametroscentros::find();

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

        $query->andFilterWhere(['like', 'codparam', $this->codparam])           
                  ->andFilterWhere(['=', 'codcen', $filter])
            ->andFilterWhere(['like', 'valor', $this->valor]);

        return $dataProvider;
    }
    
    
    
}
