<?php

namespace common\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Employees;

/**
 * EmployeesSearch represents the model behind the search form of `common\models\Employees`.
 */
class EmployeesSearch extends Employees
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'section_id', 'position_id', 'status', 'created_at', 'updated_at'], 'integer'],
            [['fullname_uz', 'fullname_en', 'fullname_ru', 'phone_1', 'phone_2', 'email', 'data_birth', 'address_birth', 'completed_institution', 'spec', 'degree', 'image'], 'safe'],
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
        $query = Employees::find();

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
            'section_id' => $this->section_id,
            'position_id' => $this->position_id,
            'data_birth' => $this->data_birth,
            'status' => $this->status,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'fullname_uz', $this->fullname_uz])
            ->andFilterWhere(['like', 'fullname_en', $this->fullname_en])
            ->andFilterWhere(['like', 'fullname_ru', $this->fullname_ru])
            ->andFilterWhere(['like', 'phone_1', $this->phone_1])
            ->andFilterWhere(['like', 'phone_2', $this->phone_2])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'address_birth', $this->address_birth])
            ->andFilterWhere(['like', 'completed_institution', $this->completed_institution])
            ->andFilterWhere(['like', 'spec', $this->spec])
            ->andFilterWhere(['like', 'degree', $this->degree])
            ->andFilterWhere(['like', 'image', $this->image]);

        return $dataProvider;
    }
}
