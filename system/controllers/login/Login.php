<?php

$username = filter_var(trim( $_POST['username']), FILTER_SANITIZE_STRING);
$pass = filter_var(trim( $_POST['pass']), FILTER_SANITIZE_STRING);



$pass = md5($pass."lkjhg5ui456");
$mysql = new mysqli('localhost', 'root', '', 'project2');
$result = $mysql->query("SELECT * FROM `users` WHERE  `username` = '$username'  AND  `pass`  = '$pass'");
$user = $result->fetch_assoc();
if (count($user) == 0) {
    echo "Пользователь не зарегистророван";
    header('Location: /myProject2/auth/registration/registr.php');  
    exit();
}

setcookie('user', $user['$username'], time() + 3600, "/");
$mysql->close();
header('Location: /myProject2/index.php');  