<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\entidadSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Entidades';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="entidad-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Crear Entidad', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            'entidad',
            'descripcion',
            'pais',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
