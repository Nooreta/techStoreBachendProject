<?php
require_once("../../app.php");
use techStore\clases\Models\Admin;

$ad=new Admin;
$ad->logout($session);
$request->Aredirect("login.php");


?>