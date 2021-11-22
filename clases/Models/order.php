<?php 
namespace techStore\clases\Models;
use techStore\clases\db;
class order extends db{
    public function __construct()
    {
        $this->table="orders";
        $this->connect();
    }
}



?>