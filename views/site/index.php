<?php
use yii\helpers\Html;
use yii\helpers\Url;
/* @var $this yii\web\View */

$this->title = 'Tavern';

$this->registerCssFile("/web/css/main.css");
$this->registerJsFile('/web/js/main.js');
?>

<!-- Первая секция -->

<!-- Конец первой секции -->

<!-- Секция контента -->

<section class="content" id="content">
	<div class="container-fluid">
		<p style="font-size: 24px; margin-top: 10px;">Эпизоды | <span style="color: #B33939;">Ведьмак</span></p>
		<div class="row">

			<?php
foreach ($seria as  $model) {
  echo '
			<div class="col-4 col-sm-4 col-md-3 col-lg-3">
			<div class="card">
			<a  href="'.Url::toRoute('site/watch').'">'.Html::img('@web/uploads/preview/'.$model->preview, ['alt' => 'My logo']).'</a>
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
