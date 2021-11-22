<?php
namespace techStore\clases;

abstract class db{ //only used to be inhirited
   protected $conn;
    protected $table;
public function connect()
{
  $this->conn = mysqli_connect(DB_SERVERNAME,DB_USERNAME,DB_PASSWORD,DB_NAME);

}
// public function selectAll($fields="*")
// {
//     $sql="select $fields from $this->table";
//     $result=mysqli_query($this->conn,$sql);
//     return mysqli_fetch_all($result, MYSQLI_ASSOC);//Assoc array: return more than one row
// }
public function selectAll($fields="*"){
  $sql="SELECT $fields FROM $this->table";
  $result=mysqli_query($this->conn,$sql);
return mysqli_fetch_all($result,MYSQLI_ASSOC);//assoc array
}

public function selectId($id,$fields="*"){
  $sql="SELECT $fields FROM $this->table where id=$id";
  $result=mysqli_query($this->conn,$sql);
return mysqli_fetch_assoc($result);//one row

}

public function selectWhere($cond,$fields="*"){
  $sql="SELECT $fields FROM $this->table where $cond";
  $result=mysqli_query($this->conn,$sql);
return mysqli_fetch_all($result,MYSQLI_ASSOC);
}

public function getCount(){
  $sql="SELECT count(*) AS cnt FROM $this->table";
  $result=mysqli_query($this->conn,$sql);
return mysqli_fetch_assoc($result)['cnt'];
}
public function insert($fields,$values)
{
  $sql="insert into $this->table($fields) values($values)";
  return mysqli_query($this->conn,$sql);
  }

  public function insertAndGetId($fields,$values)
{
  $sql="insert into $this->table($fields) values($values)";
   mysqli_query($this->conn,$sql);
   return mysqli_insert_id($this->conn);
  }


  public function update($set,$id)
  {
    $sql="update $this->table set $set where id=$id";
    return mysqli_query($this->conn,$sql);
  }
  public function delete($id)
  {
   $sql="delete from $this->table where id=$id";
   return mysqli_query($this->conn,$sql);
  }
}

?>