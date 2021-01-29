
<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;
$this->title = 'Регистрация';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">
<h1 style="color:white;"><?= Html::encode($this->title) ?></h1>
<?php
$form = ActiveForm::begin(['class'=>'form-horizontal']);
?>
<?= $form->field($model,'username')->textInput(['autofocus' => true])->label('Логин') ?>
<?= $form->field($model,'email')->input('email')->label('Почта') ?>
<?= $form->field($model,'password')->passwordInput()->label('Пароль') ?>
<?= $form->field($model,'passwordConf')->passwordInput()->label('Подтвердите пароль') ?>
<div>
<button type="submit" class="btn btn-danger">Регистрация</button>
</div>
<?php
ActiveForm::end();
?>
</div>


        
        