<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Films */
/* @var $form yii\widgets\ActiveForm */
$season = [
 1 => '1 сезон',
 2 => '2 сезон',
 3 => '3 сезон'
];
$seria = ['0','1','2','3','4','5','6','7','8','9','10','11','12'];
?>

<div class="films-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>

    <?= $form->field($model, 'preview')->fileInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?=  $form->field($model, 'season')->dropDownList($season) ?>


    

    <?= $form->field($model, 'seria')->dropDownList($seria) ?>

    <?= $form->field($model, 'place')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Опубликовать', ['class' => 'btn btn-danger']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
