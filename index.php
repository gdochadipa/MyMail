<?php
include 'function/main.php';
$main = new main();
if (isset($_GET['data'])) {
  $get = $_GET['data'];
}else {
  $get = 'index';
}

 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="asset/style.css" media="screen" title="no title" charset="utf-8">
  </head>
  <body>
    <?php
    $query = "SELECT * from tbl_surat_masuk";
    $execute = $main->execute($query);
     ?>
    <div class="" id="kontent" style="min-height: 100vh;">
    <h1 class="page-title">Data Surat Masuk</h1>
    <div class="menu-bar">
      <div class="row">
      <div class="col-6">
            <a type="button"  class="btn medium bg-yellow" href="add_sm.php" > Tambah Surat Masuk</a>
      </div>
      <div class="col-6" style="text-align: right;">
      <form class="form-input" action="" method="post">
        <div class="row">
          <div style="col-5">
            <input type="text" id="search" placeholder="Cari Berdasarkan Nomor Surat" name="get_cari" value="">
          </div>
          <div style="col-5">
            <input type="submit" class="btn medium bg-green" name="cari" value="Cari">
          </div>
        </div>
    </div>
      </div>
      </form>
    </div>
      <div class="row">
        <div style="width:100%;">
          <div class="bordered-box yellow" >

            <legend>Data Surat</legend>
            <table>
              <thead>
                <th>ID</th>
                <th>No Surat</th>
                <th>Asal Surat</th>
                <th>Subjek</th>
                <th>Tgl Surat</th>
                <th>Disposisi</th>
                <th>Action</th>
              </thead>
              <tbody id="table" >
                <?php while ($row = $execute->fetch_assoc()) { ?>

                <tr>
                  <td><?php echo $row['id_surat']; ?></td>
                  <td><?php echo $row['no_surat']; ?></td>
                  <td><?php echo $row['asal_surat']; ?></td>
                  <td><?php echo $row['subjek']; ?></td>
                  <td><?php echo $row['tgl_surat']; ?></td>
                  
                     <?php  } ?>
                 </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>



    </div>
    <script type="text/javascript">
      document.getElementById('search').onkeyup = function() {
        var filter,table,tr,i;
        filter = document.getElementById('search').value.toLowerCase();
        table = document.getElementById('table');
        tr = table.getElementsByTagName('tr');
        for (var i = 0; i < tr.length; i++) {
          if (tr[i].innerHTML.toLowerCase().indexOf(filter) > -1) {
            tr[i].style.display ="";
          }else {
            tr[i].style.display = "none";
          }
        }
      };
    </script>

  </body>
</html>
<?php ?>
