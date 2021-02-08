<?php
use yii\helpers\Html;
/* @var $this yii\web\View */

$this->title = 'Tavern';

$this->registerCssFile("/web/css/main.css");
?>
<div class="row">
<!-- Главный блок с описанием -->
<div class="home-block">
	<div class="desk-block">
		<h1 class="Name" style="color: white; font-size: 64px; letter-spacing: 5px;">THE <span class="redWord" style="color: red">WITCHER</span></h1>
		<p class="desk-seria" style="color: white; font-size: 18px;">Геральт из Ривии мутировавший охотник на монстров по<br> найму, отправляется навстречу своей судьбе в неспокойном<br> мире, где люди часто оказываются более злыми, чем звери.</p><br>
		<p class="desk-cast" style="color: white; font-size: 16px;">В ролях: Генри Кавилл, Аня Чалотра, Фрейа Аллан</p>
		<p class="desk-cast" style="color: white; font-size: 16px;">Создатели: Лорен Шмидт Хисрич</p>
		<button type="button" class="btn btn-danger">СМОТРЕТЬ ОНЛАЙН</button>
	</div>
</div>
<!-- конец главного блока -->


<!-- Блок с сериалом -->
<div class="seria-block">
	<p style="font-size: 24px; color: white;">Эпизоды | Ведьмак</p>
	<p style="font-size: 18px; color: white;">1 сезон</p>
	<!-- блок серии -->
	<div class="row">
<?php
foreach ($seria as  $model) {
  echo '
  <div class="col-lg-3">
  <div class="cart">
  <div class="image-previews"><a href="#">'.Html::img('@web/uploads/preview/'.$model->preview, ['alt' => 'My logo']).'</a></div>
  <div class="title-seria"><p>'.$model->name.'</p></div>
  <div class="desk-seria"><p>'.$model->place.'</p></div>
  </div>  
  </div>  

  ';
}
?>


</div>
<!-- Конец блока с сериалом -->
</div>






