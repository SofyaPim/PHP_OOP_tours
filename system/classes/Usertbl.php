


 <?php

	require($_SERVER['DOCUMENT_ROOT']."/myProject2/global_path.php");
    
   
	 
if(isset($_GET['full_name']) && isset($_GET['email'])&&  isset($_GET['username'])&& isset($_GET['password'])){
 
    // подключаемся к серверу
    $link = mysqli_connect('DB_HOST', 'DB_USER','DB_PASSWORD', 'DB_NAME') 
        or die("Ошибка " . mysqli_error($link)); 
     
    // экранирования символов для mysql
    $full_name =  $_GET['full_name'];
	$email =  $_GET['email'];
	 $username =  $_GET['username'];
     $password =  $_GET['password'];
    // создание строки запроса
    $query ="INSERT INTO users(full_name,email,username,password) VALUES(NULL, '$full_name','$email','$username',$password')";
     
    // выполняем запрос
     $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
     if($result)
     {
        echo "<span style='color:blue;'>Данные добавлены</span>";
    }
     // закрываем подключение
     // mysqli_close($link);
    
     header("Location: /myProject2/index.php/"); /* Производит перенаправление браузера на другой ресурс */
     
     /* Внимание! Убедитесь, что код, расположенный ниже не исполняется */
    
     
}?> 