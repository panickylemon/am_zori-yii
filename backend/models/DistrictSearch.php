<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\District;

/**
 * DistrictSearch represents the model behind the search form about `common\models\District`.
 */
class DistrictSearch extends District
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'village_id', 'number', 'size', 'price', 'is_sold', 'is_house'], 'integer'],
            [['date_ready', 'image'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = District::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'village_id' => $this->village_id,
            'number' => $this->number,
            'size' => $this->size,
            'price' => $this->price,
            'is_sold' => $this->is_sold,
            'is_house' => $this->is_house,
        ]);

        $query->andFilterWhere(['like', 'date_ready', $this->date_ready])
            ->andFilterWhere(['like', 'image', $this->image]);

        return $dataProvider;
    }
}
