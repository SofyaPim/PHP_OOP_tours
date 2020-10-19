<?php
      require($_SERVER['DOCUMENT_ROOT']."/myProject2/components/header/index.php");
      ?>
       
                    <div class="flex-box" >                       
                            <? $item = new Slide(3)?>  	 		                                                              
                                <div  class="slide-text" style= "background-image:url(<?=$item->getField('photo')?>)">
                                    <h1><?=$item->getField('title')?></h1>
                                        <h3><?=$item->getField('text')?></h3>   
                                </div>                 
               </div>                 
      <div class="tema flexColumn">
<div class="title">КОНТАКТЫ</div>
     <p class="article">Мы - команда тех, кто любит историю и любит Москву. </br></br>
     Москва – это не только место по «заколачиванию денег» и «взращиванию карьеры», а еще и бесконечно красивые памятники природы,
      заказники, парки, заповедники. Активный отдых в Москве и Подмосковье – это отличная возможность вырваться из душного мегаполиса куда-нибудь
       в «дебри», навстречу приключениям. К счастью, не все Подмосковье еще «облагорожено» асфальтными дорожками и высоченными коттеджными 
       заборами. Еще встречаются места, настолько глухие и далекие, что, очутившись там, кажется, что ты – первый человек, ступивший на эту
        землю. </br></br>Там, где не проедет автомобилист и даже велосипедист, найдет лазейку и откроет для себя все красоты 100% бездорожья турист,
         проводящий свой активный отдых в Подмосковье.</p>  
 </div>
 <div class="news">                  
                <div class="moreInfo flexRow">
                    <img src="/myProject1/images/woman.jpg" alt="">
                    <div class="text">
                        <p> Елена Белкина </p>                
                        <p> директор</p>
                        <p>по вопросам сотрудничества  </p>                        
                        <p> belkina@gototop.ru</p>
                    </div>
                </div>
                    <div class="moreInfo flexRow">
                        <img src="/myProject1/images/man.jpg" alt="">
                        <div class="text">
                            <p> Дмитрий Рогозин </p>                            
                            <p> директор отдела продаж</p>
                            <p>по вопросам развития бизнеса  </p>                            
                            <p> rogozin@gototop.ru</p>
                        </div>
                    </div>
                    </div>

<div class="form-wrapper-contacts">         
            <div class="Contacts">      
                <div class="yellow-contacts"><img src="/myProject2/icons/placeholder.png" alt="placeholder" class="icon"> Москва<br>Большая Спасская,12 </div><br>
                <div class="yellow-contacts"> <img src="/myProject2/icons/telephone.png" alt="telephone" class="icon">Телефон <br>8(495)626-46-00 </div><br>
                <div class="yellow-contacts"><img src="/myProject2/icons/mail.png" alt="mail" class="icon">e-mail <br>  info@gototop </div><br>
            </div> 
        <form  class="form-contacts" action="/myProject2/system/controllers/subscriptions/create.php" method="POST">
            <p>Напишите нам</p>            
            <input type="text" name="name" placeholder="Введите Ваше имя">                  
            <input type="email" name="email" placeholder="Ваш email">       
            <textarea name="text"  cols="30" rows="5"> </textarea>
            <input type="submit" value="Отправить" style="background-color:rgb(6, 36, 28);">
            <input type="hidden" name="table_id" value="2">

        </form>
        
</div> 
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2243.984100730639!2d37.645860316217835!3d55.77614798055969!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46b54a7a220c9e5f%3A0x262ed08bf1f58a9c!2z0JHQvtC70YzRiNCw0Y8g0KHQv9Cw0YHRgdC60LDRjyDRg9C7LiwgMTIsINCc0L7RgdC60LLQsCwgMTI5MDkw!5e0!3m2!1sru!2sru!4v1562344571916!5m2!1sru!2sru" width="100%" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
 <?php
      require($_SERVER['DOCUMENT_ROOT']."/myProject2/components/footer/index.php");
      ?>
 