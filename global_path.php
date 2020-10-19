<?php

define('PROJECT_ROOT', __DIR__);

include_once(PROJECT_ROOT.'/errors.php');

$isHttps = !empty($_SERVER['HTTPS']) && 'off' !== strtolower($_SERVER['HTTPS']);
($isHttps) ? $protocol = 'https' : $protocol = 'http'; 
$parts = explode($_SERVER['HTTP_HOST'],__DIR__);
$folder = array_pop($parts);
define('PROJECT_URL',$protocol.'://'.$_SERVER['HTTP_HOST'].$folder);

define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASSWORD',''); 
define('DB_NAME','project2');
  
include_once(PROJECT_ROOT.'/system/classes/autoload.php');


	$isHttps = !empty($_SERVER['HTTPS']) && 'off' !== strtolower($_SERVER['HTTPS']);
	if($isHttps){
		$protocol = 'https';
	}else{
		$protocol = 'http';
	}
    $hostpath = $protocol.'://'.$_SERVER['HTTP_HOST'].'/myPoject2/';
	
	
	?>