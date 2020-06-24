<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\DistrictSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Rms Districts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rms-district-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Rms District', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'district_id',
            'district_name',
            'state_id',
            'district_added_by',
            'district_status',
            //'created_date',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
