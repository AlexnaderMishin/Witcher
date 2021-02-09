<?php
use yii\helpers\Html;
use yii\helpers\Url;
/* @var $this yii\web\View */

$this->title = 'Tavern';

$this->registerCssFile("/web/css/main.css");
$this->registerJsFile('/web/js/main.js');
?>
<div class="row">
<!-- Главный блок с описанием -->
<div class="home-block">
	<div class="desk-block">
		<h1 class="Name" style="color: white; font-size: 64px; letter-spacing: 5px;">THE <span class="redWord" style="color: #B33939;">WITCHER</span></h1>
		<p class="desk-seria" style="color: white; font-size: 18px;">Геральт из Ривии мутировавший охотник на монстров по<br> найму, отправляется навстречу своей судьбе в неспокойном<br> мире, где люди часто оказываются более злыми, чем звери.</p><br>
		<p class="desk-cast" style="color: white; font-size: 16px;">В ролях: Генри Кавилл, Аня Чалотра, Фрейа Аллан</p>
		<p class="desk-cast" style="color: white; font-size: 16px;">Создатели: Лорен Шмидт Хисрич</p>
		<button type="button" class="btn btn-danger" id="scroll_bottom" onclick="MyScroll('#kek')">СМОТРЕТЬ ОНЛАЙН</button>
	</div>
</div>
<!-- конец главного блока -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script>
function MyScroll (id){
	var offset = 0;
	$('html, body').animate({
	scrollTop: $(id).offset ().top - offset
	}, 500);
	return false;
// console.log("qwerty"); 

}
</script>

<!-- Блок с сериалом -->
<div class="seria-block" id="kek">
	<p style="font-size: 24px; color: white;">Эпизоды | <span style="color: #B33939;">Ведьмак</span></p>
	<p style="font-size: 18px; color: white;">1 сезон</p>
	<!-- блок серии -->
<div class="cart-block">
	<?php
foreach ($seria as  $model) {
  echo '
  <div class="cart">
  <div class="image-previews"><a href="'.Url::toRoute('site/watch').'">'.Html::img('@web/uploads/preview/'.$model->preview, ['alt' => 'My logo']).'</a></div>
  <div class="title-seria"><p>'.$model->name.'</p></div>
  <div class="desk-seria"><p>'.$model->place.'</p></div>
  </div>  
';
}
?>
</div>


<div>
	
</div>
<!-- Конец блока с сериалом -->
</div>






