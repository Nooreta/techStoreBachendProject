<?php 
namespace techStore\clases;

class cart{

public function add($id,$data)
{
$_SESSION['cart'][$id]=$data;
}
public function count()
{
    if(isset($_SESSION['cart']))
    {
    return count($_SESSION['cart']);
    }
    else return 0;
 }
public function total()
{
    $total=0;
    if(isset($_SESSION['cart']))
    foreach($_SESSION['cart'] as $id=>$data)
    {
      $total=$total+$data['qty']*$data['price']; 
     }
    return $total;
}
public function hasId($id)
{
    if(isset($_SESSION['cart']))
    return array_key_exists($id,$_SESSION['cart']);
   else return false;
}
public function getAll()
{
    if(isset($_SESSION['cart']))
    return $_SESSION['cart'];
    return [];
}
public function remove($id)
{
    
    unset($_SESSION['cart'][$id]);
}
}


?>