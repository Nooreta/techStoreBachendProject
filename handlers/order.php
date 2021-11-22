<?php 
require_once("../app.php");
use techStore\clases\Models\order;
use techStore\clases\Models\orderDetails;
use techStore\clases\cart;

if($request->postHas("submit"))
{
 $name=$request->post("name");
 $email=$request->post("email");
 $address=$request->post("address");
 $phone=$request->post("mobile");
$order=new order;
$orderId=$order->insertAndGetId("name,email,phone,address"," '$name', '$email' , '$phone' , '$address' ");

$cart=new cart;
$orderDetails=new orderDetails;

foreach($cart->getAll() as $id=>$prodData)
{
 $qty=$prodData['qty'];
$orderDetails->insert("orderId,productId,quantity"," '$orderId', '$id', '$qty' ");
}
$request->redirect("products.php");
}


?>