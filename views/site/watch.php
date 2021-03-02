<?php
use yii\helpers\Html;

use yii\helpers\Url;

$this->registerCssFile("/web/css/watch.css");
// $id = Yii::$app->request;

?>
<div class="row">
	<?php
	
	foreach ($seria as  $model) {
     echo '
    <!-- блок новости -->
<div class="box">
<!-- заголовок -->
  <div class="title-news">
    <h1>'.$model->name.'</h1>
  </div>
<!-- картинка -->
   
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

</div>


