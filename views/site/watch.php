<?php
use yii\helpers\Html;

use yii\helpers\Url;

$this->registerCssFile("/web/css/watch.css");
// $id = Yii::$app->request;

?>

<div class="container">
  <div class="row">
    <section class="watch">
      <?php
        foreach ($seria as  $model) {
          echo'
          
          
            
            <p class="watch__title" style="font-size:36px;">'.$model->name.'</p><br>
            <p class="watch__desk" style="font-size:24px;">Повествование серии:<br><span style="font-size:18px;">'.$model->description.'</spam></p>
            <iframe class="watch__video" src="'.$model->place.'" allowfullscreen="true" width="100%" height="100%"></iframe>
            
            
          
      
          ';
        }
      ?>
        </section>
    </div>
</div>
    
  

