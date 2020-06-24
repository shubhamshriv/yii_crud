<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\RmsDistrict */

$this->title = 'Create Rms District';
$this->params['breadcrumbs'][] = ['label' => 'Rms Districts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rms-district-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
