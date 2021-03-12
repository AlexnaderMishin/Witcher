<?php
use yii\helpers\Html;
use yii\helpers\Url;
/* @var $this yii\web\View */

$this->title = 'Tavern';

$this->registerCssFile("/web/css/main.css");
$this->registerJsFile('/web/js/main.js');
?>


<!-- Первая секция -->
<section class="header">
    <div class="container-fluid">
        <div class="row">
            <div class="intro">
                <div class="intro__media-video">
                    <video src="/web/uploads/vid.mp4" autoplay muted loop ></video>
                </div>
                <div class="intro__content">
                     <h1 class="Name" style="color: white; font-size: 64px; letter-spacing: 5px; font-family: 'masson';">THE <span class="redWord" style="color: #B33939; font-family: 'masson';">WITCHER</span></h1>
                     <p class="offer__desk" style="max-width: 30vw;">Геральт из Ривии мутировавший охотник на монстров по найму, отправляется навстречу своей судьбе в неспокойном мире, где люди часто оказываются более злыми, чем звери.</p>
                    <p class="role">В ролях: Генри Кавилл, Аня Чалотра, Фрейа Аллан</p>
                    <p class="offer__role2">Создатели: Лорен Шмидт Хиссрич</p>
                    <button type="button" class="offer__button" onclick="MyScroll()">СМОТРЕТЬ ОНЛАЙН</button>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Конец первой секции -->
<div class="container-fluid">
    <div class="row">
    <section class="wrapper">
    <h1>Промо ролики:</h1>
    <div class="slider-container">
        <div class="slider-track">
            <div class="slider-item"></div>
            <video class="slider-item" src="/web/uploads/books.mp4" controls
></video>
            <video class="slider-item" src="/web/uploads/luck.mp4" controls
></video>
            <video class="slider-item" src="/web/uploads/walk.mp4" controls
></video>
            <video class="slider-item" src="/web/uploads/vid.mp4" controls
></video>
            <video class="slider-item" src="/web/uploads/vid.mp4" controls
></video>
            <!-- <div class="slider-item"></div>
            <div class="slider-item"></div>
            <div class="slider-item"></div>
            <div class="slider-item"></div>
            <div class="slider-item"></div>
            <div class="slider-item"></div>
            <div class="slider-item"></div>
            <div class="slider-item"></div> -->
        </div>
    </div>
    <div class="slider-buttons">
        <button class="btn-prev">Prev</button>
        <button class="btn-next">Next</button>
    </div>
    
</section>
    </div>
</div>

<!-- Секция контента -->

<section class="content" id="content">
    <div class="container-fluid">        

        <h1 id="scroll">Эпизоды Ведьмак</h1>
        <p  style="font-size: 18px; margin-top: 10px;">1 | Сезон</p>
        <div class="row">

            <?php
            foreach ($seria as  $model) {
                echo'
                <div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-3 col-xxl-3 ">
                 <div class="card">
                 <a  href="'.Url::toRoute(['site/watch', 'id'=> $model->id]).'">'.Html::img('@web/uploads/preview/'.$model->preview, ['alt' => 'My logo']).'</a>
                            <h3>'.$model->name.'</h3>
                <p>'.$model->description.'</p>
               
               
                </div>  
                </div>';    
            }
            ?>
        </div>
    </div>
</section>
<script>
    $(document).ready(function(){
        let position = 0;
        const slidesToShow = 3;
        const slidesToScroll = 2;
        const container = $('.slider-container');
        const track = $('.slider-track');
        const item = $('.slider-item');
        const btnPrev = $('.btn-prev');
        const btnNext = $('.btn-next');
        const itemsCount = item.length;
        const itemWidth = container.width() / slidesToShow;
        const movePosition = slidesToScroll * itemWidth;

        item.each(function(index, item){
            $(item).css({
                minWidth: itemWidth,
            });
        });


        btnNext.click(function(){
            const itemsLeft = itemsCount - (Math.abs(position) + slidesToShow * itemWidth) / itemWidth;
            position -= itemsLeft >= slidesToScroll ? movePosition : itemsLeft * itemWidth;
            setPosition();
            checkBtns();
            
        });

        btnPrev.click(function(){
            const itemsLeft = Math.abs(position) / itemWidth;
            position += itemsLeft >= slidesToScroll ? movePosition : itemLeft * itemWidth;

         
            setPosition();
            checkBtns();
            
        });
        
        const setPosition = () => {
            track.css({
                transform: `translateX(${position}px)`
            });
        };
         const checkBtns = () => {
            btnNext.prop(
                'disabled',
                position <= - (itemsCount - slidesToShow) * itemWidth

            );
            btnPrev.prop('disabled', position === 0);
        };

        checkBtns();
    });   
</script> 


<!-- конец секции контента -->