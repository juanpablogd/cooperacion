<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\cooperacionSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cooperacion-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'linea_descripcion') ?>

    <?= $form->field($model, 'link_linea') ?>

    <?= $form->field($model, 'id_app_p_modalidad') ?>

    <?= $form->field($model, 'id_app_p_agente') ?>

    <?php // echo $form->field($model, 'id_app_p_linea') ?>

    <?php // echo $form->field($model, 'id_app_t_entidad') ?>

    <?php // echo $form->field($model, 'id_app_p_nivel') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
