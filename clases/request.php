<?php
namespace techStore\clases;
class request{
     public function get($key){
       return $_GET[$key];
     }
     public function post($key)
     {
         return $_POST[$key];
     }
     public function getHas($id)
{
 return isset($_GET[$id]); 
}
public function postHas($id)
{
 return isset($_POST[$id]); 
}
public function redirect($path)
{
header("Location: ".URL.$path);
}
public function Aredirect($path)
{
header("Location: ".AURL.$path);
}

}



?>