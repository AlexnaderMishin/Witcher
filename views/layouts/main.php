<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title>Witcher</title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<!-- navbar -->
<header id="header" class="header">
    <div class="header__image">
        <div class="container-fluid">
        <div class="row">
           
        <div class="col-lg-5 ml-auto">
            <nav>
                <ul class="menu d-flex justify-content-end">
                     <?php
                    if( Yii::$app->user->isGuest){
                    echo '<li class="menu__item">
                        <a href="'.Url::toRoute('site/login').'">Войти</a>
                    </li>';
                    }else{
                        echo  
                        '
                    <li class="menu__item">
                        <a href="'.Url::home().'">Главная</a>
                    </li>
                    <li class="menu__item">
                        <a href="#">Профиль</a>
                    </li>
                    <li>'
                        . Html::beginForm(['/site/logout'], 'post')
                        . Html::submitButton(
                        'Выход (' . Yii::$app->user->identity->username . ')',
                        ['class' => 'menu__logout']
                        )
                        . Html::endForm()
                    .'</li>';
                    }
                    ?>
                    
                    
                </ul>
            </nav>
        </div>
        </div>
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

<div class="container-fluid">
<div class="row">
<?= $content ?>
</div>
</div>

<?php $this->endBody() ?>
<script>
function MyScroll(){
    var content = document.getElementById("content");
    content.scrollIntoView({block: "center", behavior: "smooth"});
}
</script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
<?php $this->endPage() ?>
