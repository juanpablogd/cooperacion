<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\cooperacion */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Cooperación', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cooperacion-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Actualizar', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Borrar', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Seguro que desea eliminar este elemento?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'linea_descripcion',
            [
             'label'=>'Enlace',
             'attribute'=>'link_linea',
             'format' => 'raw',
             'value'=>function ($data) {
                         return Html::a($data->link_linea, $data->link_linea, ['target'=>'_blank']);
                     },
            ],
            [
             'attribute' => 'id_app_p_modalidad',
                'value' => function($model) {
                    return $model->idAppPModalidad['descripcion'];
                },
            ],
            [
             'attribute' => 'id_app_p_agente',
                'value' => function($model) {
                    return $model->idAppPAgente['descripcion'];
                },
            ],
            [
             'attribute' => 'id_app_p_linea',
                'value' => function($model) {
                    return $model->idAppPLinea['descripcion'];
                },
            ],
            [
             'attribute' => 'id_app_t_entidad',
                'value' => function($model) {
                    return $model->idAppTEntidad['entidad'];
                },
            ],
            [
             'attribute' => 'id_app_p_nivel',
                'value' => function($model) {
                    return $model->idAppPNivel['descripcion'];
                },
            ]
        ],
    ]) ?>

</div>
