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
                <div class="col-md-12">
                <div class="alert alert-info">
                        SPK Menentukan Metode Pembelajaran Sekolah Dasar Menggunakan Metode AHP dan Topsis.
                </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="panel panel-danger">
                        <div class="panel-heading">
                            Masukkan Nama Kasus (Mata Pelajaran)
                        </div>
                        <div class="panel-body">
                            <form role="form" action="simpan_mapel.php" method="post">
                                <?php 
                                $sql = $koneksi->query("SELECT * FROM tab_mata_pelajaran ORDER BY id_mapel DESC LIMIT 1");
                                $data = $sql->fetch_assoc();
                                $id_mapel = $data['id_mapel'] + 1 ;
                                ?>
                                <input hidden name ="id_mapel" value = "<?php echo $id_mapel ?>" type="text" />
                                <div class="form-group">
                                    <label>Masukkan Nama Mata Pelajaran</label>
                                    <input required name = "nama_mapel" class="form-control" type="text" />
                                </div>
                                <div class="form-group">
                                    <label>Masukkan Nama Sub Mata Pelajaran</label>
                                    <input required name = "nama_sub_mapel" class="form-control" type="text" />
                                </div>
                                <button type="submit" class="btn btn-danger"><i class="fa fa-sign-in"></i> Lanjut Proses </button>
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
  
</body>
</html>
