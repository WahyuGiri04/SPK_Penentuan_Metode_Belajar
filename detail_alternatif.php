<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<?php include "koneksi.php" ?>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>SPK </title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME STYLE  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body>
    <!-- LOGO HEADER END-->
<?php include "menu.php" ?>
     <!-- MENU SECTION END-->
     <div class="content-wrapper">
        <div class="container">
            <div class="row pad-botm">
                <div class="col-md-12">
                    <h4 class="header-line"> SISTEM PENDUKUNG KEPUTUSAN </h4>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="panel panel-danger">
                        <div class="panel-heading">
                            Masukkan Nama Alternatif Baru
                        </div>
                        <?php 
                        $id_alternatif = $_GET['id_alternatif']; 
                        $sql_data = $koneksi->query("SELECT * FROM tab_alternatif WHERE id_alternatif = '$id_alternatif'");
                        $data_sql = $sql_data->fetch_assoc();
                        $c1 = explode(" . ",$data_sql['c1']);
                        $c2 = explode(" . ",$data_sql['c2']);
                        $c3 = $data_sql['c3'];
                        $c4 = explode(" . ",$data_sql['c4']);
                        $c5 = explode(" . ",$data_sql['c5']);
                        $c6 = explode(" . ",$data_sql['c6']);
                        $c7 = $data_sql['c7'];
                        ?>
                        <div class="panel-body">
                            <form role="form" action = "tambah_alternatif.php" method="post">
                                <div class="form-group">
                                    <label>Masukkan Alternatif</label>
                                    <input readonly name = "nama_alternatif" value = "<?php echo $data_sql['nama_alternatif'] ?>" class="form-control" type="text" />
                                </div>
                                <div align="center" class="form-group">
                                    <label>Masukkan Nilai Terbaik Alternatif Tiap Kriteria</label>
                                </div>
                                <div class="form-group">
                                    <label>TUJUAN PENGAJARAN ( C1 )</label>
                                    <?php
                                    $sql_c1 = $koneksi->query("SELECT * FROM tab_sub WHERE kode_kriteria = 'C1'");
                                    while($data_c1 = $sql_c1->fetch_assoc()){
                                        $id = $data_c1['nama_sub'];?>
                                        <div class="checkbox">
                                            <label>
                                                <input <?php if(in_array($data_c1['nama_sub'],$c1)){ echo "checked";} ?> type="checkbox" name = "c1[]" value="<?php echo $data_c1['nama_sub'] ?>" /><?php echo $data_c1['nama_sub'] ?>
                                            </label>
                                        </div>
                                    <?php
                                    }
                                    ?>
                                </div>
                                <div class="form-group">
                                    <label>MATERI PEMBELAJARAN ( C2 )</label>
                                    <?php
                                    $sql_c2 = $koneksi->query("SELECT * FROM tab_sub WHERE kode_kriteria = 'C2'");
                                    while($data_c2 = $sql_c2->fetch_assoc()){?>
                                        <div class="checkbox">
                                            <label>
                                                <input <?php if(in_array($data_c2['nama_sub'],$c2)){ echo "checked";} ?> type="checkbox" name = "c2[]" value="<?php echo $data_c2['nama_sub'] ?>" /><?php echo $data_c2['nama_sub'] ?>
                                            </label>
                                        </div>
                                    <?php
                                    }
                                    ?>
                                </div>
                                <div class="form-group">
                                    <label>WAKTU PEMBELAJARAN ( C3 )</label>
                                    <select name = "c3" class="form-control">
                                        <?php
                                        $sql_c3 = $koneksi->query("SELECT * FROM tab_sub WHERE kode_kriteria = 'C3'");
                                        while($data_c3 = $sql_c3->fetch_assoc()){?>
                                           <option <?php if(($data_c3['nama_sub']==$c3)){ echo "selected";} ?> value = "<?php echo $data_c3['nama_sub'] ?>"> <?php echo $data_c3['nama_sub'] ?></option>
                                        <?php   
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label> Kemampuan Guru ( C4 )</label>
                                    <?php
                                    $sql_c4 = $koneksi->query("SELECT * FROM tab_sub WHERE kode_kriteria = 'C4'");
                                    while($data_c4 = $sql_c4->fetch_assoc()){?>
                                        <div class="checkbox">
                                            <label>
                                                <input <?php if(in_array($data_c4['nama_sub'],$c4)){ echo "checked";} ?> type="checkbox" name = "c4[]" value="<?php echo $data_c4['nama_sub'] ?>" /><?php echo $data_c4['nama_sub'] ?>
                                            </label>
                                        </div>
                                    <?php
                                    }
                                    ?>
                                </div>
                                <div class="form-group">
                                    <label>Kemampuan Siswa ( C5 )</label>
                                    <?php
                                    $sql_c5 = $koneksi->query("SELECT * FROM tab_sub WHERE kode_kriteria = 'C5'");
                                    while($data_c5 = $sql_c5->fetch_assoc()){?>
                                        <div class="checkbox">
                                            <label>
                                                <input <?php if(in_array($data_c5['nama_sub'],$c5)){ echo "checked";} ?> type="checkbox" name = "c5[]" value="<?php echo $data_c5['nama_sub'] ?>" /><?php echo $data_c5['nama_sub'] ?>
                                            </label>
                                        </div>
                                    <?php
                                    }
                                    ?>
                                </div>
                                <div class="form-group">
                                    <label> Fasilitas ( C6 )</label>
                                    <?php
                                    $sql_c6 = $koneksi->query("SELECT * FROM tab_sub WHERE kode_kriteria = 'C6'");
                                    while($data_c6 = $sql_c6->fetch_assoc()){?>
                                        <div class="checkbox">
                                            <label>
                                                <input <?php if(in_array($data_c6['nama_sub'],$c6)){ echo "checked";} ?> type="checkbox" name = "c6[]" value="<?php echo $data_c6['nama_sub'] ?>" /><?php echo $data_c6['nama_sub'] ?>
                                            </label>
                                        </div>
                                    <?php
                                    }
                                    ?>
                                </div>
                                <div class="form-group">
                                    <label> Jumlah Siswa ( C7 )</label>
                                    <select name = "c7" class="form-control">
                                        <?php
                                        $sql_c7 = $koneksi->query("SELECT * FROM tab_sub WHERE kode_kriteria = 'C7'");
                                        while($data_c7 = $sql_c7->fetch_assoc()){?>
                                           <option <?php if(($data_c7['nama_sub']==$c7)){ echo "selected";} ?> value = "<?php echo $data_c7['nama_sub'] ?>"> <?php echo $data_c7['nama_sub'] ?></option>
                                        <?php   
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                  <a href="alternatif.php"><button type="button" class="btn btn-danger"><i class="fa fa-sign-out"></i> Kembali</button></a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
     <!-- CONTENT-WRAPPER SECTION END-->
    <section class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                   &copy; 2014 Yourdomain.com |<a href="http://www.binarytheme.com/" target="_blank"  > Designed by : binarytheme.com</a> 
                </div>

            </div>
        </div>
    </section>
      <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY  -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
      <!-- CUSTOM SCRIPTS  -->
    <script src="assets/js/custom.js"></script>
    <?php

    if (isset($_POST['simpan'])) {
      $alternatif = $_POST['nm_alter'];

      $sql    = "SELECT * FROM tab_alternatif";
      $tambah = $koneksi->query($sql);

      if ($row = $tambah->fetch_row()) {
        $masuk = "INSERT INTO tab_alternatif set nama_alternatif ='$alternatif'";
        $buat  = $koneksi->query($masuk);

        echo "<script>alert('Input Data Berhasil') </script>";
        echo "<script>window.location.href = \"alternatif.php\" </script>";
      }
    }

     ?>
  
</body>
</html>
