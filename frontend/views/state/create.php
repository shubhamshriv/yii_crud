<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\RmsStates */

$this->title = 'Create Rms States';
$this->params['breadcrumbs'][] = ['label' => 'Rms States', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rms-states-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
