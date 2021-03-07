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
          
          
            
            <h4 class="watch__title" style="font-size:18px;">Ведьмак:  '.$model->season.' сезон,  '.$model->seria.' серия</h4>
            <iframe class="watch__video" src="'.$model->place.'" allowfullscreen="true" width="100%" height="100%"></iframe><br>  
            <div class="row">   
            <div class="col d-flex justify-content-start"><h2>'.$model->name.'</h2></div>
            <div class="col d-flex justify-content-end" style="margin-top:10px;"><input type="button" value="2 серия"></input></div><br>  
            </div><br>  
            <div class="watch__desk"><h4>Повествование серии:</h4><p>'.$model->description.'</p></div>
              
            
             
          ';
        }
      ?>
        </section>
       
    </div>
</div>
    
  

