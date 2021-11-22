<?php
namespace techStore\clases\Models;
use techStore\clases\db;
class Cat extends db {
    public function __construct()
    {
        $this->table="category";
        $this->connect();
    }
}




?>