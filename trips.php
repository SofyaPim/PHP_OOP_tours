<?php
      require($_SERVER['DOCUMENT_ROOT']."/myProject2/components/header/index.php");
      ?>
<div class=" flex-box oneSlide">
    <? $item = new Slide(2)?>
    <div class="slide-text " style="background-image:url(<?=$item->getField('photo')?>)">
        <h1><?=$item->getField('title')?></h1>
        <h3><?=$item->getField('text')?></h3>
    </div>
</div>
<div class="title">ВЫБЕРИТЕ ТУР</div>
<?$arr = (new Trip(0))->getElementsId();?>
<?foreach($arr as $elem){?>
<?$item = new Trip($elem)?>
<div class="about-Us">
    <?="<img src=". $item->getField('photo').">"?>
    <div class="turs">
        <h1 class="title-turs"><?=$item->getField('title')?></h1>
        <p> <?=$item->getField('text')?> </p>
        <h2 class="title-turs"><?=$item->getField('price')?></h2>
        <button class="book-button">забронировать</button>
    </div>
</div>
<?}?>
<?php
      require($_SERVER['DOCUMENT_ROOT']."/myProject2/components/footer/index.php");
      ?>
