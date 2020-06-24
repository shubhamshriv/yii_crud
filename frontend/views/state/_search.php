<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\StateSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rms-states-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'rms_state_id') ?>

    <?= $form->field($model, 'rms_state_name') ?>

    <?= $form->field($model, 'rms_createdate') ?>

    <?= $form->field($model, 'state_status') ?>

    <?= $form->field($model, 'State_added_by') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
