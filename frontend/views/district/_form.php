<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\RmsDistrict */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rms-district-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'district_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'state_id')->textInput() ?>

    <?= $form->field($model, 'district_added_by')->textInput() ?>

    <?= $form->field($model, 'district_status')->dropDownList([ 0 => '0', 1 => '1', '' => '', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'created_date')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
