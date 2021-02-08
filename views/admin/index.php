<?php
use yii\helpers\Html;
use yii\helpers\Url;

/* @var $this yii\web\View */
$this->registerCssFile("/web/css/admin.css");
$this->title = 'Admin-board';
?>
<div class="control-block">
	<h1>Панель администратора</h1>


<div class="news">
<p style="color: black; font-size: 24px;">Новости</p>
<a href="<?php echo Url::toRoute('posts/create'); ?>">Добавление постов</a>
</div>
<div class="seria">
<p style="color: black; font-size: 24px;">Сериал</p>
<a href="<?php echo Url::toRoute('films/create'); ?>">Загрузить серию</a>
</div>



</div>
