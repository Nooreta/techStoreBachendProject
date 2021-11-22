<?php
// $path=__DIR__.'/'; //get directory
// echo $path;
use techStore\clases\request;
use techStore\clases\session;
//PATH
define('PATH',__DIR__.'/');  //used when include or require 
define('URL',"http://localhost/techstore/"); //used with links
define('AURL',"http://localhost/techstore/admin/");
// echo PATH;
// echo "<br>";
// echo URL;

//db
define("DB_SERVERNAME","localhost");
define("DB_USERNAME","root");
define("DB_PASSWORD","");
define("DB_NAME","techstore");

require_once(PATH."vendor/autoload.php");

//include or require classes
//objects
 $request=new request;
 $session=new session;
?>