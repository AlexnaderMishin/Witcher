<?php
use yii\helpers\Html;

use yii\widgets\ActiveForm;
use yii\helpers\Url;

$this->registerCssFile("/css/watch.css");
// $id = Yii::$app->request;

?>
<section class="watch" id="watch">
<?php
  echo '
  <div class="content">
    <div class="content__title"><h4 class="watch__title" style="font-size:18px;">Ведьмак: '.$seria->season.' сезон,  '.$seria->seria.' серия</h4></div>
    <div class="content__video"><iframe class="watch__video" src="'.$seria->place.'" allowfullscreen="true""></iframe></div>
    </div>
    <div class="content__info">
      <div class="info__name"><h2>'.$seria->name.'</h2></div>
      <div class="info__btn"><input type="button" value="2 серия"></input></div>
      <div class="info__deskription"><h3>Повествование серии:</h3><p>'.$seria->description.'</p></div>
  </div>
  ';
  
?>
</section>
<section class="comment">
  
</section>