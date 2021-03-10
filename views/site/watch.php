<?php
use yii\helpers\Html;

use yii\widgets\ActiveForm;
use yii\helpers\Url;

$this->registerCssFile("/css/watch.css");
// $id = Yii::$app->request;

?>

<div class="container">
  <div class="row">
    <section class="watch">
      <?php
      // foreach ($seria as $model) {
        echo '
          
          
            
            <h4 class="watch__title" style="font-size:18px;">Ведьмак:  ' . $seria->season . ' сезон,  ' . $seria->seria . ' серия</h4>
            <iframe class="watch__video" src="' . $seria->place . '" allowfullscreen="true" width="100%" height="100%"></iframe><br>  
            <div class="row">   
            <div class="col d-flex justify-content-start"><h2>' . $seria->name . '</h2></div>
            <div class="col d-flex justify-content-end" style="margin-top:10px;"><input type="button" value="2 серия"></input></div><br>  
            </div><br>  
            <div class="watch__desk"><h4>Повествование серии:</h4><p>' . $seria->description . '</p></div>
              
            
             
          ';
      // }
      // если есть коменты выводим
          foreach($comments as $comment){
            echo $comment->user->username . '<br>';
            echo $comment->message . '<br>';
            
          }
      ?>
      <!-- форма коментов -->
      <div class="comments-form">

      <?php $form = ActiveForm::begin([
          'method' => 'post',
          'action' => ['site/save-comment'],
        ]); ?>
      <?= $form->field($newComment, 'idFilm')->input('hidden', ['value' => $seria->id])->label(false) ?>
      <?= $form->field($newComment, 'message')->textarea(['rows' => 6]) ?>
      

      <div class="form-group">
          <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
      </div>

      <?php ActiveForm::end(); ?>

      </div>
        </section>
       
    </div>
</div>