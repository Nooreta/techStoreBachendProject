<?php 
require_once("../app.php");
use techStore\clases\cart;
if($request->getHas('id'))
{
    $id=$request->get("id");
}
$cart=new cart;
$cart->remove($id);
$request->redirect("cart.php");
?>