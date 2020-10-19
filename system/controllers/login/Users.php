

<?php
$full_name = filter_var(trim( $_POST['full_name']), FILTER_SANITIZE_STRING);
$email = filter_var(trim( $_POST['email']), FILTER_SANITIZE_STRING);
$username = filter_var(trim( $_POST['username']), FILTER_SANITIZE_STRING);
$pass = filter_var(trim( $_POST['pass']), FILTER_SANITIZE_STRING);


if(mb_strlen($username) < 5 || mb_strlen($username) > 90 ){
    echo 'Недопустимая длина логина';
    exit();
}elseif (mb_strlen($full_name) < 3 || mb_strlen($full_name) > 50) {
    echo 'Недопустимая длина имени';
    exit();
}elseif (mb_strlen($pass) < 8 || mb_strlen($pass) > 12) {
    echo 'Длина пароля должна быть от 8 до 12 символов';
    exit();
}
$pass = md5($pass."lkjhg5ui456");
$mysql = new mysqli('localhost', 'root', '', 'project2');
$mysql->query("INSERT INTO `users`(`full_name`, `email`, `username`, `pass`) VALUES ('$full_name', '$email', '$username', '$pass')");
$mysql->close();
header("Location: /myProject2/index.php");  
?>
