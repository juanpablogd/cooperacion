<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\cooperacionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cooperación';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cooperacion-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Crear Cooperación', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            'linea_descripcion',
            'link_linea',
            'id_app_p_modalidad',
            'id_app_p_agente',
            // 'id_app_p_linea',
            // 'id_app_t_entidad',
            // 'id_app_p_nivel',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
