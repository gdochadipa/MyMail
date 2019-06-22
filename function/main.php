<?php
/**
 *
 */
 /**
  *
  */
 class koneksi
 {

   public function __construct()
   {
     $this->connect = new mysqli("localhost","root","","mymaildb");
   }
 }

class main extends koneksi
{

  function __construct()
  {
    parent::__construct();
  }
  public function execute($query)
  {
    $executed = $this->connect->query($query);
    return $executed;
  }
  public function getTable($table,$kolom=null,$id=null)
  {
    $sql = "SELECT * from $table";
    if ($kolom != null) {
      $sql = "SELECT * from $table where $kolom = $id";
    }
    $executed = $this->connect->query($sql);
    return $executed->fetch_all(MYSQL_BOTH);
  }
  public function countData($table,$column=null,$id=null)
  {
    $query = "SELECT * from $table";
    if ($column!=null) {
      $query .="where $column = $id";
    }
    $result =  $this->connect->query($query)->num_rows;
    return $result;
  }
  public function getUser($id_user)
  {
    $getUser ="SELECT * from  tbl_login where id_user = '$id_user'";
    $dut = $this->connect->query($getUser)->fetch_assoc();
    return $dut;
  }

  public function findId($table,$kolom,$besar,$awalan )
  {
    $query = "SELECT $kolom from $table order by $kolom desc limit 1";
    $result = $this->connect->query($query);
    $getNum = $this->connect->query($query)->num_rows;

    if ($getNum == 0) {
      $nomor = 1;
    }else {
      $row = $result->fetch_array();
      $nomor=intval(substr($row[0],strlen($awalan)))+1;
    }

    if ($besar > 0) {
      $angka = $awalan.str_pad($nomor,$besar,"0",STR_PAD_LEFT);
    }else {
      $angka = $awalan.$nomor;
    }
    return $angka;
  }

  public function getImage($file)
  {
    $_imgExtension = end((explode(".",$file)));
    date_default_timezone_get('Asia/Kuala_Lumpur');
    $time = date('Ymdhis');

    $new_file = $time.".".$_imgExtension;
    return $new_file;
  }

  public function get_type_user($id_user)
  {
    $get_type = "SELECT * from tbl_login where id_user=$id_user";
    $find_type = $this->connect->query($get_type)->fetch_assoc();
    $type = $find_type['type'];
    return $type;
  }

}

 ?>
