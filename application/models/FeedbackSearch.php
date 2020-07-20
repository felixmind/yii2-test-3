<?php

namespace app\models;

use yii\data\ActiveDataProvider;

class FeedbackSearch extends Feedback
{
    public function rules()
    {
        return [
            [['id', 'status'], 'integer'],
            [['customer', 'phone'], 'safe'],
        ];
    }

    public function search($params)
    {
        $query = Feedback::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere(['id' => $this->id])
              ->andFilterWhere(['status' => $this->status])
              ->andFilterWhere(['like', 'customer', $this->customer])
              ->andFilterWhere(['like', 'phone', $this->phone]);

        return $dataProvider;
    }
}
