<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\RmsStates */

$this->title = 'Update Rms States: ' . $model->rms_state_id;
$this->params['breadcrumbs'][] = ['label' => 'Rms States', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->rms_state_id, 'url' => ['view', 'id' => $model->rms_state_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="rms-states-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
