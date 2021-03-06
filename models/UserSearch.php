<?php

namespace backend\modules\admin\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\modules\admin\models\soru;

/**
 * UserSearch represents the model behind the search form about `backend\modules\admin\models\soru`.
 */
class UserSearch extends soru
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['soru'], 'safe'],
            [['id'], 'integer'],
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
        $query = soru::find();

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

        $query->andFilterWhere(['like', 'soru', $this->soru]);

        return $dataProvider;
    }
}
