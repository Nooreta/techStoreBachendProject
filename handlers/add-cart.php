<?php  
require_once("../app.php");
use techStore\clases\cart;
if($request->postHas("submit"))
{
    // $qty=$_POST['submit'];
    $qty=$request->post("quantity");
    $name=$request->post("name");
    $price=$request->post("price");
    $id=$request->post("id");
    $img=$request->post("prodImg");
    $prodData=[
        "qty"=>$qty,
        "name"=>$name,
        "price"=>$price,
        "img"=>$img
    ];

$cart=new cart;
$cart->add($id,$prodData);
//    echo "<pre>";
//    print_r($_SESSION);
//    echo "</pre>";
   $request->redirect("products.php");
}