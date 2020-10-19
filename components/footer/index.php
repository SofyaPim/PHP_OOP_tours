

<footer >
    <div class="footer-wrapper">
        <div class="column1">
            <div class="logotype">
                <img src="/myProject2/icons/spasskaya-tower.png" alt="" srcset="">
              <p>My Moscow</p>
           </div>
            
            <p> Мы приглашаем тебя на самые разные экскурсии по Москве.
                        Автобусные или пешеходные, на целый день или на несколько часов, 
                        на свежем воздухе или с заходом в здание - у нас в ассортименте более
                        20ти авторских экскурсий по Москве, выбирай и узнавай Москву вместе с 
                        нами! </p>
        </div>
            
           
         
        <div class="column2">
         		 
			<div class="icons" >
                <p> КОНТАКТЫ</p><br></br>
				<p> <img src="/myProject2/icons/placeholder.png" class="icon" alt="">Москва,Большая Спасская,12 </p></br>
				<p><img src="/myProject2/icons/telephone.png" alt="" class="icon" >8(495)626-46-00</p></br>
				<p><img src="/myProject2/icons/mail.png" alt="" class="icon" > info@gototop.</p></br>
			</div>
          
        </div>
        <div class="column3">
            <p> ПОСЛЕДНИЕ  НОВОСТИ</p>
            <?$arr = (new News(0))->getElementsId();?>
         <?foreach($arr as $elem){?>
            
            <?$item = new News($elem)?>                       
                <p><?=$item->getField('text')?></p>               
                <p><?=$item->getField('title')?></p>           
            
            <?}?>     
               
        </div>
       
       </div>
    <div class="copyright "> <p >2018 Все права защищены</p>
        <p>Designed by NordicItScool</p>
        <div>
            <img src="/myProject2/icons/social/vk.png" alt="" srcset="">
            <img src="/myProject2/icons/social/instagram.png" alt="" srcset="">
            <img src="/myProject2/icons/social/facebook.png" alt="" srcset="">
        </div>
</div>
</div> 
  

</footer>


</div>
<script src="/myProject2/js/slider.js" async></script> 
</body>
</html>