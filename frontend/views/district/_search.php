<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\DistrictSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rms-district-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'district_id') ?>

    <?= $form->field($model, 'district_name') ?>

    <?= $form->field($model, 'state_id') ?>

    <?= $form->field($model, 'district_added_by') ?>

    <?= $form->field($model, 'district_status') ?>

    <?php // echo $form->field($model, 'created_date') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
