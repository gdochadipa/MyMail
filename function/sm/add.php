<?php
include '../main.php';
$main = new main();
$table = 'tbl_surat_masuk';
$kolom = 'id_surat';
$besar = 3;
$awalan = 'SM';


 $id_surat = $main->findId($table,$kolom,$besar,$awalan);
$no_agenda = $_POST['no_agenda'];
$id_user = '1';
$no_surat = $_POST['no_surat'];
$asal_surat = $_POST['asal_surat'];
$subjek = $_POST['subjek'];
$tgl_surat = $_POST['tgl_surat'];
$tgl_diterima = $_POST['tgl_diterima'];


$keterangan = $_POST['keterangan'];
$id_jenis_surat = $_POST['id_jenis_surat'];
$disposisi = "Belum disposisi";



if (isset($_POST['submit'])) {


  $query = "INSERT INTO	tbl_surat_masuk (id_surat,no_agenda,no_surat,asal_surat,subjek,tgl_surat,tgl_terima,keterangan,id_jenis_surat,disposisi,id_user) VALUES
  ($id_surat,$no_agenda,$no_surat,$asal_surat,$subjek,$tgl_surat,$tgl_diterima,$keterangan,$id_jenis_surat,$disposisi,$id_user)";

  $execute = $main->execute($query);
  if ($execute) {
       header("Location: ../../index.php");
  }else {
    echo " <script>
       alert('gagal insert');
     </script>";





  }
  echo $query;
}
 ?>
