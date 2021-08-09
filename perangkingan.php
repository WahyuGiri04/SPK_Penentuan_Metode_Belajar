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
<?php include "menu.php" ?>
     <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading text-center">
                            <?php 
                            $id_mapel = $_GET['id_mapel'];
                            $select = $koneksi->query("SELECT * FROM tab_mata_pelajaran where id_mapel = '$id_mapel'");
                            $data_select = $select->fetch_assoc();
                            $mapel = $data_select['nama_mapel'];
                            ?>
                            HASIL PERANGKINGAN Mapel <?php echo $mapel ?>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <ul class="nav nav-tabs">
                                    <a class="btn btn-success" href="detail_analisis.php?id_mapel=<?php echo $id_mapel ?>" ><i class="fa fa-database"></i> Detail Analisis</a>
                                </ul>
                                <br>
                                <table class="table table-striped table-bordered table-hover">
                                    <thead >
                                        <tr>
                                        <th>No</th>
                                        <th>Nama Alternatif</th>
                                        <th>Nilai Preferensi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1 ;
                                        $sql = $koneksi->query("SELECT * FROM tab_perangkingan left join tab_alternatif on tab_alternatif.id_alternatif=tab_perangkingan.id_alternatif where id_mapel = '$id_mapel' ORDER BY nilai_preferensi DESC");
                                        while ($row = $sql->fetch_array()) {
                                        ?>
                                        <tr>
                                            <td><?php echo $no++ ?></td>
                                            <td><?php echo $row['nama_alternatif'] ?></td>
                                            <td><?php echo round(($row[2] * 100),4) ?> %</td>
                                        </tr>

                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="form-group">
                                <a href="daftar_hasil_analisis.php"><button type="button" class="btn btn-danger"><i class="fa fa-backward"></i> Kembali </button></a>
                            </div>
                        </div>
                    </div>
                     <!-- End  Kitchen Sink -->
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
