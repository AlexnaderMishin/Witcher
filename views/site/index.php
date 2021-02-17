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
		<h1 class="Name" style="color: white; font-size: 64px; letter-spacing: 5px; font-family: 'masson';">THE <span class="redWord" style="color: #B33939;">WITCHER</span></h1>
		<p class="desk-seria" style="color: white; font-size: 18px;">Геральт из Ривии мутировавший охотник на монстров по<br> найму, отправляется навстречу своей судьбе в неспокойном<br> мире, где люди часто оказываются более злыми, чем звери.</p><br>
		<p class="desk-cast" style="color: white; font-size: 16px;">В ролях: Генри Кавилл, Аня Чалотра, Фрейа Аллан</p>
		<p class="desk-cast" style="color: white; font-size: 16px;">Создатели: Лорен Шмидт Хисрич</p>
		<button type="button" class="btn btn-danger" onclick="MyScroll()">СМОТРЕТЬ ОНЛАЙН</button>
	
	</div>
	
</div>
<!-- end main block -->
<!-- news block -->
<div class="news-block">
	<div class="new-cart">
		<div  class="image-news"><img src="/web/uploads/Posada.jpg"></div>
		<div  class="title-news"><h3>Еще больше крупных VFX-студий присоединяются к The Witcher Season 2</h3></div>
		
		<div  class="text-news"><p>Йеннифэр, терпящая издевательства и пренебрежение, неожиданно находит способ сбежать. Охота Геральта на «дьявола» идет не по плану. Цири ищет убежище среди людей</p></div>
	</div>
	<div class="new-cart">
		<div  class="image-news"><img src="/web/uploads/cintra.jpg"></div>
		<div  class="title-news"><h3>Ведьмак снимет воспоминания о Цинтре во втором сезоне</h3></div>
		
		<div  class="text-news"><p>Йеннифэр, терпящая издевательства и пренебрежение, неожиданно находит способ сбежать. Охота Геральта на «дьявола» идет не по плану. Цири ищет убежище среди людей</p></div>
	</div>
	<div class="new-cart">
		<div  class="image-news"><img src="/web/uploads/eskel.jpg"></div>
		<div  class="title-news"><h3>Спойлер: Netflix внесет большие изменения в роль Эскеля в Ведьмаке </h3></div>
		
		<div  class="text-news"><p>Йеннифэр, терпящая издевательства и пренебрежение, неожиданно находит способ сбежать. Охота Геральта на «дьявола» идет не по плану. Цири ищет убежище среди людей</p></div>
	</div>
	
</div>
<!-- end news block -->
<!-- video block -->
<div class="seria-block" id="el">
	<p style="font-size: 24px; color: white;">Эпизоды | <span style="color: #B33939;">Ведьмак</span></p>
	<p style="font-size: 18px; color: white;">1 сезон</p>
	<!-- блок серии -->
<div class="cart-block">
	<?php
foreach ($seria as  $model) {
  echo '
  <div class="cart">
  <div class="image-previews"><a href="'.Url::toRoute('site/watch').'">'.Html::img('@web/uploads/preview/'.$model->preview, ['alt' => 'My logo']).'</a></div>
  <div class="title-seria"><h4>'.$model->name.'</h4></div>
  <div class="desk-seria"><p>'.$model->description.'</p></div>
  </div>  
';
}
?>
</div>


<div>
	
</div>
<!-- end video bloc -->
</div>
<!-- scroll script -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script>
function MyScroll(){
	const el = document.getElementById('el');
	el.scrollIntoView({behavior: "smooth"});
}
</script>
<!-- end script -->


