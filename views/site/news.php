<div class="row row-cols-1 row-cols-md-2 g-4">
<div class="col">
<?php
foreach ($request as  $model) {
    echo '
    <div class="card">
      <img src="/web/uploads/rukia.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">'.$model->description.'</h5>
        <p class="card-text">'.$model->description.'</p>
      </div>
    </div><br>
  
    ';
}
?>
</div>
</div>
