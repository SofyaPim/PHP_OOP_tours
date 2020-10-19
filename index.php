<?php
      require($_SERVER['DOCUMENT_ROOT']."/myProject2/components/header/index.php");    
?>
<div class="slider-wrapper">
    <div class="slider flex-box horizontal-nav horizontal-arrows ">
        <ul class="slides">
            <?$slides = (new Slide(0))->getElementsId();?>
            <? foreach($slides as $elem){?>
            <? $item = new Slide($elem)?>
            <li>
                <div class="slide-text"
                    style="background-image: url('<?=$item->getField('photo')?>'); background-size:cover; height: 500px">
                    <h1><?=$item->getField('title')?></h1>
                    <h3><?=$item->getField('text')?></h3>
                </div>
            </li>
            <?}?>
        </ul>
    </div>
</div>
<p class="title"> ЧТО МЫ ПРЕДЛАГАЕМ?</p>
<h3 style="align-self:center">Наша главная цель - рассказать о Москве так, чтобы было интересно всем!</h3>
<div class="cards">
    <?$arr = (new Card(0))->getElementsId();?>
    <?foreach($arr as $elem){?>
    <?$item = new Card($elem)?>
    <div class="cards-Item">
        <?= "<img src=". $item->getField('icon').">"?>
        <div class="Item">
            <h2><?=$item->getField('title')?></h2>
            <p> <?=$item->getField('text')?></p>
        </div>
        <!-- <a href="<?=$item->getField('link')?>" class="news__a">Подробнее</a> -->
    </div>
    <?}?>
</div>
<div class="about-Us">
    <div class="who-we-are">
        <p>
            Мы - команда тех, кто любит историю и любит Москву.<BR> Москва – это не только место
            по «заколачиванию денег» и «взращиванию карьеры», а еще и бесконечно красивые памятники
            природы, заказники, парки, заповедники. Активный отдых в Москве и Подмосковье – это отличная
            возможность вырваться из душного мегаполиса куда-нибудь в «дебри», навстречу приключениям.
            К счастью, не все Подмосковье еще «облагорожено» асфальтными дорожками и высоченными
            коттеджными заборами. Еще встречаются места, настолько глухие и далекие, что, очутившись
            там, кажется, что ты – первый человек, ступивший на эту землю.Там, где не проедет
            автомобилист и даже велосипедист, найдет лазейку и откроет для себя все красоты 100%
            бездорожья турист, проводящий свой активный отдых в Подмосковье. </p>
        <button class="book-button">ПОДРОБНЕЕ О НАС</button>
    </div>
    <img class="about-Us-img" src="/myProject2/photos/group.jpg" alt="people">
</div>
<div class="moskow-Photos">
    <p class="title">МОСКВА В ФОТОГРАФИЯХ</p>
    <div class="yellow-Line"></div>
    <h3>Проще всего обо всем рассказать в фотографиях!Смотрите наши фотоотчеты и присылайте свои фотографии!</h3>
    <div class="moscow-cards">
        <?$arr = (new Photo(0))->getElementsId();?>
        <?foreach($arr as $elem){?>
        <?$item = new Photo($elem)?>
        <?= "<img src=". $item->getField('photo').">"?>
        <?}?>
    </div>
</div>
<p class="title">ОТЗЫВЫ</p>
<div class="comment">
    <div class="yellow-Line"></div>
    <div class="slider flex-box horizontal-nav horizontal-arrows ">
        <ul class="slides">
            <?$slides = (new  Review(0))->getElementsId();?>
            <? foreach($slides as $elem){?>
            <? $item = new  Review($elem)?>
            <li>
                <div class="reviews">
                    <?$arr = (new Review(0))->getElementsId();?>
                    <?foreach($arr as $elem){?>
                    <?$item = new Review($elem)?>
                    <div class="review">
                        <div class="reviw-text">
                            <p><?=$item->getField('text')?></p>
                        </div>
                        <div class="reviw-autor">
                            <img src="<?=$item->getField('image')?>" />
                            <p><?=$item->getField('name')?></p>
                        </div>
                    </div>
                    <?}?>
                </div>
            </li>
            <?}?>
        </ul>
    </div>
</div>
<div class="form">
    <p class="title-form">НАПИШИТЕ НАМ</p>
    <div class="yellow-Line"></div>
    <form class="question-form" action="/myProject2/system/controllers/subscriptions/create.php" method="POST">
        <div>
            <input type="text" name="name" placeholder="введите Ваше имя" required />
            <input type="text" name="phone" placeholder="введите Ваш телефон" required />
            <input type="text" name="email" placeholder="введите Ваше e-mail" required />
            <input type="submit" name="submit" value="ОТПРАВИТЬ ВОПРОС" />
        </div>
        <textarea name="text" placeholder="Ваше сообщение"></textarea>
        <input type="hidden" name="table_id" value="2">
    </form>
</div>

<?php
      require($_SERVER['DOCUMENT_ROOT']."/myProject2/components/footer/index.php");
      ?>
