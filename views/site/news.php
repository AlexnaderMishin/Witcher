
<?php
$this->registerCssFile("/web/css/news.css");
?>
<body class="news">
<div class="row">
<!-- первая колонка -->
<div class="col-md-9">
<?php
foreach ($request as  $model) {
     echo '
    <!-- блок новости -->
<div class="box">
<!-- заголовок -->
  <div class="title-news">
    <h1>'.$model->title.'</h1>
  </div>
<!-- картинка -->
    <div class="image-news">
      <img src="/web/uploads/image.jpg" alt="image">
    </div>
<!-- краткаое описание -->
    <div class="desk-news">
      <p>'.$model->description.'</p>
    </div>
<!-- кнопка -->
<div class="button-link"><a href="#" class="btn btn-danger">ПРОДОЛЖИТЬ</a></div>

</div>
  
    ';
 }
?>



<!-- конец блокаа -->
</div>
<!-- конец первой колонки -->
<!-- вторая колонка -->
<div class="col-sm">
<div class="sort-box">
<p>rthrtthr</p>
</div>
</div>
<!-- конец второй колонки -->
</div>
</body>