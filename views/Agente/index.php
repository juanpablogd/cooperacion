<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\agenteSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Agentes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="agente-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Crear Agente', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            'descripcion',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
