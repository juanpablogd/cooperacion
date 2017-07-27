<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\linea */

$this->title = 'Actualizar Línea: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Líneas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="linea-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
