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
    <div class="" id="kontent" style="min-height: 100vh;">
      <form class="form-input" enctype="multipart/form-data" action="function/sm/add.php?user=<?php echo "admin";?>" method="post">
      <div class="row">
        <div class="col-12">
          <div class="bordered-box yellow">

            <div class="row">
              <div class="col-5">
                Nomor Agenda :
              </div>
              <div class="col-5">
                <input type="text" name="no_agenda"  value="">
              </div>
            </div>

            <div class="row">
              <div class="col-5">
                Nomor Surat :
              </div>
              <div class="col-5">
                <input type="text" name="no_surat"  value="">
              </div>
            </div>

            <div class="row">
              <div class="col-5">
                Asal Surat :
              </div>
              <div class="col-5">
                <input type="text" name="asal_surat"  value="">
              </div>
            </div>

            <div class="row">
              <div class="col-5">
                Subjek :
              </div>
              <div class="col-5">
                <textarea name="subjek" class='textarea' rows="4" cols="40">

                </textarea>
              </div>
            </div>

            <div class="row">
              <div class="col-5">
                Tanggal Surat  :
              </div>
              <div class="col-5">
                <input type="date" name="tgl_surat"  value="">
              </div>
            </div>

            <div class="row">
              <div class="col-5">
                Tanggal Diterima  :
              </div>
              <div class="col-5">
                <input type="date" name="tgl_diterima"  value="">
              </div>
            </div>

            <div class="row">
              <div class="col-5">
                Keterangan :
              </div>
              <div class="col-5">
                <textarea name="keterangan" class='textarea' rows="4" cols="40">

                </textarea>
              </div>
            </div>



            <div class="row">
              <div class="col-5">
                Jenis Surat :
              </div>
              <div class="col-5">
                <select class="select_" name="id_jenis_surat">
                  <option value="1">Segera</option>
                  <option value="2">Penting</option>
                  <option value="3">Rahasia</option>
                  <option value="4">biasa</option>
                </select>
              </div>
            </div>

            <div class="row">
              <div class="col-5">



                <div class="row">
                  <div class="col-3">
                    <a href="index.php" class="btn medium bg-yellow">Batal</a>        </div>
                  </div>
                  <div class="col-2">
                      <input type="submit"  id="submit" name="submit" class="btn medium bg-green" value="Tambah data">
                </div>

          </div>
        </div>
      </div>
      </form>
    </div>
    <script type="text/javascript">

    </script>

  </body>
</html>
<?php ?>
