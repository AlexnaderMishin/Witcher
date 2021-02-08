<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\FilmsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Сериал';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="films-index" style="margin-top: 5%;">

    <h1><?= Html::encode($this->title) ?></h1>

    
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'preview:ntext',
            'name',
            'season',
            'seria',
            //'place:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<p>
        <?= Html::a('Добавить сериал', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


</div>
