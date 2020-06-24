<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\StateSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Rms States';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rms-states-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Rms States', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'rms_state_id',
            'rms_state_name',
            'rms_createdate',
            'state_status',
            'State_added_by',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
