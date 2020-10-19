<?php

ini_set('error_reporting', E_ALL);
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	session_start();
	
	require_once($_SERVER['DOCUMENT_ROOT']."/myProject2/global_path.php");
    require_once($_SERVER['DOCUMENT_ROOT']."/myProject2/system/classes/autoload.php");


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/myProject2/styles/style.css">
    <link rel="stylesheet" href="/myProject2/styles/slider.css">
    <script src="/myProject2/js/jquery-3.4.1.js" async></script>
    <script src="/myProject2/js/script.js" async></script>
    <title>MyMoscow</title>

</head>


<body>
    <div class="wrapper">
        <header>
            <div class="navigator">
                <div class="logotype">
                    <img src="/myProject2/icons/spasskaya-tower.png">
                    <p>My Moscow</p>
                </div>
                <div class="nav-Item">
                    <a href='/myProject2/index.php'>Главная</a>
                    <a href='/myProject2/trips.php'>Наши услуги</a>
                    <a href='/myProject2/contacts.php'>Контакты</a>
                    <a href='#'>Отзывы</a>
                   
                    <a id="myBtn">вход</a>
                    <a href="/myProject2/auth/registration/registr.php">Регистрация!</a>
                </div>

                <div id="myModal" class="modal">
                    <div class="modal-content">
                        <span class="close">&times;</span>
                        <div class="container-mlogin">
                            <div id="login">
                                <h1>Вход</h1>
                                <form class="sign-up-form" action="/myProject2/system/controllers/login/Login.php"
                                    method="POST">

                                    <p><label for="user_pass">Имя пользователя<br>
                                            <input class="input" id="username" name="username" size="20" type="text"
                                                placeholder="Enter username"></label></p>
                                    <p><label for="user_pass">Пароль<br>
                                            <input class="input" id="pass" name="pass" size="32"
                                                placeholder="Enter password"></label></p>
                                    <p class="submit">
                                        <input class="button" id="register" name="register" type="submit"
                                            value="Авторизироваться"></p>
                                    <input type="hidden" name="table_id" value="1">
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
               
            </div>
            
        </header>
