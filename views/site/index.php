<?php
use yii\helpers\Html;
use yii\helpers\Url;
/* @var $this yii\web\View */

$this->title = 'Tavern';

$this->registerCssFile("/web/css/main.css");
$this->registerJsFile('/web/js/main.js');
?>

<!-- Первая секция -->
<header id="header" class="header">
    <div class="header__image">
        <div class="container-fluid">
        	<div class="row">
        		<div class="offer">
                
                <h1 class="Name" style="color: white; font-size: 64px; letter-spacing: 5px; font-family: 'masson';">THE <span class="redWord" style="color: #B33939; font-family: 'masson';">WITCHER</span></h1>
                <div class="offer__intro">
                    <p class="offer__desk">Геральт из Ривии мутировавший охотник на монстров по найму, отправляется навстречу своей судьбе в неспокойном мире, где люди часто оказываются более злыми, чем звери.</p>
                    <p class="role">В ролях: Генри Кавилл, Аня Чалотра, Фрейа Аллан</p>
                    <p class="offer__role2">Создатели: Лорен Шмидт Хиссрич</p>
                    <button type="button" class="offer__button" onclick="MyScroll()">СМОТРЕТЬ ОНЛАЙН</button>
                </div>
            </div>
        	</div>
        </div>
    </div>
</header>
<!-- Конец первой секции -->

<!-- Секция контента -->

<section class="content" id="content">
	<div class="container-fluid">
		<p style="font-size: 24px; margin-top: 10px;">Эпизоды | <span style="color: #B33939;">Ведьмак</span></p>
		<div class="row">

			<?php
            foreach ($seria as  $model) {
                echo'
                <div class="col-4 col-sm-4 col-md-3 col-lg-3">
			     <div class="card">
			     <a  href="'.Url::toRoute(['site/watch', 'id'=> $model->id]).'">'.Html::img('@web/uploads/preview/'.$model->preview, ['alt' => 'My logo']).'</a>
                            <h3>'.$model->name.'</h3>
                <p>'.$model->description.'</p>
               
               
                </div>	
                </div>';	
			}
			?>
		</div>
	</div>
</section>
	

<!-- конец секции контента -->
