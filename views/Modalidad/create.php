<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\modalidad */

$this->title = 'Crear Modalidad';
$this->params['breadcrumbs'][] = ['label' => 'Modalidades', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="modalidad-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
