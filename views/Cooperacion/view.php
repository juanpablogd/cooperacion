<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\cooperacion */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Cooperacions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cooperacion-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'linea_descripcion',
            'link_linea',
            'id_app_p_modalidad',
            'id_app_p_agente',
            'id_app_p_linea',
            'id_app_t_entidad',
            'id_app_p_nivel',
        ],
    ]) ?>

</div>
