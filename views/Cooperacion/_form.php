<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\cooperacion */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cooperacion-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'linea_descripcion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'link_linea')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_app_p_modalidad')->textInput() ?>

    <?= $form->field($model, 'id_app_p_agente')->textInput() ?>

    <?= $form->field($model, 'id_app_p_linea')->textInput() ?>

    <?= $form->field($model, 'id_app_t_entidad')->textInput() ?>

    <?= $form->field($model, 'id_app_p_nivel')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
