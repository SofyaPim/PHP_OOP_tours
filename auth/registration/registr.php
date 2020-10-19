<?php



      require($_SERVER['DOCUMENT_ROOT']."/myProject2/components/header/index.php");
      ?>
        

<div class="container_register">
<div id="login" class="registr_form">
 <h1>Регистрация</h1>
<form action="/myProject2/system/controllers/login/Users.php"  method="post">
 <p><label for="user_login">Полное имя<br>
 <input class="input" id="full_name" name="full_name"size="32"  type="text" placeholder="Enter fullname"></label></p>
<p><label for="user_pass">E-mail<br>
<input class="input" id="email" name="email" size="32"type="email" placeholder="Enter email"></label></p>
<p><label for="user_pass">Имя пользователя<br>
<input class="input" id="username" name="username"size="20" type="text" placeholder="Enter username"></label></p>
<p><label for="user_pass">Пароль<br>
<input class="input" id="pass" name="pass" size="32" placeholder="Enter password"   ></label></p>
<p class="submit">
      <input class="button" id="register" name= "register" type="submit" value="Зарегистрироваться"></p>
	  
 </form>
</div>
</div>
<?php



      require($_SERVER['DOCUMENT_ROOT']."/myProject2/components/footer/index.php");
      ?>

  