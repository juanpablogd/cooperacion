<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\cooperacion */

$this->title = 'Create Cooperacion';
$this->params['breadcrumbs'][] = ['label' => 'Cooperacions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cooperacion-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
