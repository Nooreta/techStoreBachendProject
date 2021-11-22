<?php
require_once("app.php");
use techStore\clases\Models\Admin;
// require_once("clases/request.php");
// require_once("clases/session.php");
// require_once("clases/db.php");
// require_once("clases/Models/product.php");
// require_once("clases/Models/order.php");

// // $req=new request;
// // echo $req->get('name');
// //  $sec=new session;
// // $sec->set('name','Noor');
// // echo $sec->get('name');
// // $sec->remove('name');
// // echo $sec->get('name');
// $prod=new product;
// $res=$prod->selectAll("id,name");
// $order1=new order;
// $order1->insert("id,name,email,phone,address","'1','Noor','Noor@gmail.com','0599547377','Tulkarm'");
// $order1->insert("id,name,email,phone,address","'2','Noora','Noora@gmail.com','0599547777','Nablus'");
// $order1->update("name='Ameer',email='Ameer@gmail.com',phone='05954678',address='Nablus'",1);
// // $order1->delete(0);
// // $res=$prod->selectId("id>5");
// echo "<pre>";
// print_r($res);
// echo "</pre>";
// $order=new order;
// $resO=$order->selectAll();
// echo "<pre>";
// print_r($resO);
// echo "</pre>";
$ad = new Admin;
$res=$ad->login('Noor@gmail.com','123',$session);
echo "<pre>";
var_dump($res);
echo "</pre>";




?>
