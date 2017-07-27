<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\cooperacion */

$this->title = 'Actualizar Cooperación: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Cooperación', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cooperacion-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
