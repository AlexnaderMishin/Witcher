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
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
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
<div class="navbar-main">
<div class="container-fluid">
<div class="row">
<div class="col-sm">
<!-- Логотип -->
<a class="navbar-brand" href="<?php echo Url::home();?>">
      <img src="/web/uploads/bird.png" alt="" width="45" height="46">
    </a>
<?php
if(!Yii::$app->user->isGuest){
echo '
<ul class="nav">

<a class="nav-link" aria-current="page" href="#">Сериал</a>


<a class="nav-link" href="'.Url::toRoute('site/news').'">Новости</a>


<a class="nav-link" href="#">Анимации</a>

</ul>
';
}

?>
</div>
<div class="col-sm">
<!-- Навигация -->
<ul class="nav justify-content-end">
<?php
if( Yii::$app->user->isGuest){
echo'

    <a class="btn btn-danger" href="'.Url::toRoute('site/login').'">ВОЙТИ</a>

';
}else{
    echo'
   
  <li class="nav-item">'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Выход (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-outline-danger']
                )
                . Html::endForm()
                . '</li>
    ';
}
?>

  
  
</ul>
</div> 
</div>

</div>
</div>
<div class="container-fluid ">
    <?= $content ?>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
