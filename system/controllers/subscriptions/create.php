<?php

	require_once($_SERVER['DOCUMENT_ROOT']."/myProject2/global_path.php");
    

 
    $name = filter_var(trim( $_POST['name']), FILTER_SANITIZE_STRING);
    $phone = filter_var(trim( $_POST['phone']), FILTER_SANITIZE_STRING);
    $email = filter_var(trim( $_POST['email']), FILTER_SANITIZE_STRING);
    $text = filter_var(trim( $_POST['text']), FILTER_SANITIZE_STRING);
    
    
    
    $mysql = new mysqli('localhost', 'root', '', 'project2');
    $mysql->query("INSERT INTO `subscribe`(`name`, `email`, `phone`, `text`) VALUES ('$name', '$email', '$phone', '$text')");
    $mysql->close();
    header("Location: /myProject2/index.php");  
    ?>