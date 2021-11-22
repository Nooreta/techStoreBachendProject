<?php  
require_once("../../app.php");
use techStore\clases\Models\Admin;

if($request->postHas("submit"))
{
    // $qty=$_POST['submit'];
    $email=$request->post("email");
    $password=$request->post("password");
    $ad=new Admin;
    $isLogin=$ad->login($email,$password,$session);
    if($isLogin)
    {
        $request->Aredirect("index.php");
    }
    else 
    $request->Aredirect("login.php");
}

