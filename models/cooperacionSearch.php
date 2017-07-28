<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\cooperacion;

/**
 * cooperacionSearch represents the model behind the search form about `app\models\cooperacion`.
 */
class cooperacionSearch extends cooperacion
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_app_p_modalidad', 'id_app_p_agente', 'id_app_p_linea', 'id_app_p_nivel'], 'integer'],
            [['linea_descripcion', 'link_linea', 'id_app_t_entidad'], 'safe'],
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
        $query = cooperacion::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'sort' => ['attributes' => ['linea_descripcion', 'link_linea', 'id_app_t_entidad']]
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->joinWith('idAppTEntidad');

        $query->andFilterWhere(['like', 'LOWER(linea_descripcion)', strtolower($this->linea_descripcion)])
            ->andFilterWhere(['like', 'LOWER(link_linea)', strtolower($this->link_linea)])
            ->andFilterWhere(['like', 'LOWER(app_t_entidad.entidad)', strtolower($this->id_app_t_entidad)])
            ;

        return $dataProvider;
    }
}
