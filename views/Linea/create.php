<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\linea */

$this->title = 'Create Linea';
$this->params['breadcrumbs'][] = ['label' => 'Lineas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="linea-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
