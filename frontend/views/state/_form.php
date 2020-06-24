<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\RmsStates */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rms-states-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'rms_state_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rms_createdate')->textInput() ?>

    <?= $form->field($model, 'state_status')->dropDownList([ 0 => '0', 1 => '1', '' => '', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'State_added_by')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
