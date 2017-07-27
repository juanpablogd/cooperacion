<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\modalidad */

$this->title = 'Update Modalidad: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Modalidads', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="modalidad-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
