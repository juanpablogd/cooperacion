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
            [
             'label'=>'Enlace',
             'attribute'=>'link_linea',
             'format' => 'raw',
             'value'=>function ($data) {
                         return Html::a($data->link_linea, $data->link_linea, ['target'=>'_blank']);
                     },
            ],[
                'label' => 'entidad',
                'format' => 'ntext',
                'attribute'=>'id_app_t_entidad',
                'value' => function($model) {
                    return $model->idAppTEntidad['entidad'];
                },
            ],
            ['class' => 'yii\grid\ActionColumn'],   
        ],
    ]); ?>
</div>
