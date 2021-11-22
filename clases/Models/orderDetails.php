<?php
namespace techStore\clases\Models;
use techStore\clases\db;
class orderDetails extends db {
public function __construct()
{
    $this->table="order_details";
    $this->connect();
}
}
?>
