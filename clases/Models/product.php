<?php
namespace techStore\clases\Models;
use techStore\clases\db;
class product extends db{
    public function __construct()
    {
        $this->table='products';
        $this->connect();
        
    }
    public function selectid($id,$fields="*")
    {
        $sql="SELECT $fields from $this->table JOIN category on $this->table.categoryId=category.id where $this->table.id=
        $id";
        $result=mysqli_query($this->conn,$sql);
        return mysqli_fetch_assoc($result);
    }
    public function selectAll($fields="*"){
        $sql="SELECT $fields FROM $this->table JOIN category on $this->table.categoryId=category.id ";
        $result=mysqli_query($this->conn,$sql);
        return mysqli_fetch_all($result,MYSQLI_ASSOC);//assoc array
      }

}



?>