<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\modalidad;
use app\models\agente;
use app\models\linea;
use app\models\entidad;
use app\models\nivel;
use kartik\select2\Select2;
/* @var $this yii\web\View */
/* @var $model app\models\cooperacion */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cooperacion-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'linea_descripcion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'link_linea')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_app_p_modalidad')->dropDownList(
            ArrayHelper::map(
                modalidad::find()->orderBy(['descripcion'=>SORT_ASC])->all(),
                'id',
                'descripcion'),
                ['prompt' => '---Seleccione---']
        )
    ?>

    <?= $form->field($model, 'id_app_p_agente')->dropDownList(
            ArrayHelper::map(
                agente::find()->orderBy(['descripcion'=>SORT_ASC])->all(),
                'id',
                'descripcion'),
                ['prompt' => '---Seleccione---']
        )
    ?>

    <?= $form->field($model, 'id_app_p_linea')->dropDownList(
            ArrayHelper::map(
                linea::find()->orderBy(['descripcion'=>SORT_ASC])->all(),
                'id',
                'descripcion'),
                ['prompt' => '---Seleccione---']
        )
    ?>

    <?php    // Normal select with ActiveForm & model
        echo $form->field($model, 'id_app_t_entidad')->widget(Select2::classname(), [
            'data' => ArrayHelper::map(entidad::find()->orderBy(['id'=>SORT_ASC])->all(),'id','entidad'),
            'language' => 'es',
            'options' => ['placeholder' => 'Seleccione La Entidad ...'],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]); 
    ?>

    <?= $form->field($model, 'id_app_p_nivel')->dropDownList(
            ArrayHelper::map(
                nivel::find()->orderBy(['descripcion'=>SORT_ASC])->all(),
                'id',
                'descripcion'),
                ['prompt' => '---Seleccione---']
        )
    ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Crear' : 'Actualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
