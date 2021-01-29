<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;


$this->title = 'Авторизация';
$this->params['breadcrumbs'][] = $this->title;
 
?>
<div class="container">
    <h1 style="color:white;"><?= Html::encode($this->title) ?></h1>

    <?php
$form = ActiveForm::begin(['class'=>'form-horizontal']);
?>
<?= $form->field($model,'username')->textInput(['autofocus' => true])->label('Логин') ?>

<?= $form->field($model,'password')->passwordInput()->label('Пароль') ?>

<div>
<button type="submit" class="btn btn-danger">Войти</button>
<p style="color:white;">Создать учётную запись по <a href="<?php echo Url::toRoute('site/reg') ?>">ссылке.</a></p>
</div>


    <?php ActiveForm::end(); ?>

   
</div>
