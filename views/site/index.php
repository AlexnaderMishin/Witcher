<?php
use yii\helpers\Html;
use yii\helpers\Url;
/* @var $this yii\web\View */

$this->title = 'Tavern';

$this->registerCssFile("/web/css/main.css");
$this->registerJsFile('/web/js/main.js');
?>

<!-- Первая секция -->
<section class="header">
    <div class="container-fluid">
        <div class="row">
            <div class="intro">
                <div class="intro__media-video">
                    <video src="/web/uploads/test.mp4" autoplay muted loop width="100%" height="100%"></video>
                </div>
                <div class="intro__content">
                     <h1 class="Name" style="color: white; font-size: 64px; letter-spacing: 5px; font-family: 'masson';">THE <span class="redWord" style="color: #B33939; font-family: 'masson';">WITCHER</span></h1>
                     <p class="offer__desk" style="max-width: 30vw;">Геральт из Ривии мутировавший охотник на монстров по найму, отправляется навстречу своей судьбе в неспокойном мире, где люди часто оказываются более злыми, чем звери.</p>
                    <p class="role">В ролях: Генри Кавилл, Аня Чалотра, Фрейа Аллан</p>
                    <p class="offer__role2">Создатели: Лорен Шмидт Хиссрич</p>
                    <button type="button" class="offer__button" onclick="MyScroll()">СМОТРЕТЬ ОНЛАЙН</button>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Конец первой секции -->

<!-- Секция контента -->

<section class="content" id="content">
    <div class="container-fluid">
        

        <p style="font-size: 24px; margin-top: 10px;">Эпизоды | <span style="color: #B33939;">Ведьмак</span></p>
        <p style="font-size: 18px; margin-top: 10px;">Сезон | <span>1</span></p>
        <div class="row">

            <?php
            foreach ($seria as  $model) {
                echo'
                <div class="col-3">
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