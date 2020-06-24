<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\RmsDistrict */

$this->title = 'Update Rms District: ' . $model->district_id;
$this->params['breadcrumbs'][] = ['label' => 'Rms Districts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->district_id, 'url' => ['view', 'id' => $model->district_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="rms-district-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
