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
                            TABEL ALTERNATIF
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <ul class="nav nav-tabs">
                                    <a class="btn btn-success" href="alternatiftambah.php" ><i class="fa fa-plus"></i> Tambah Alternatif</a>
                                </ul>
                                <br>
                                <table class="table table-striped table-bordered table-hover">
                                    <thead >
                                        <tr>
                                        <th>No</th>
                                        <th>Nama Alternatif</th>
                                        <th colspan="2">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1 ;
                                        $sql = $koneksi->query('SELECT * FROM tab_alternatif');
                                        while ($row = $sql->fetch_array()) {
                                        ?>
                                        <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td><?php echo $row[1] ?></td>
                                        <td align="center">
                                            <a class="btn btn-success" href="detail_alternatif.php?id_alternatif=<?php echo $row['id_alternatif'] ?>"><i class="fa fa-eye"></i> Detail</a>
                                            <a class="btn btn-warning" href="editalternatif.php?id_alternatif=<?php echo $row['id_alternatif'] ?>"><i class="fa fa-edit"></i> Edit</a>
                                            <a class="btn btn-danger" href="hapusalternatif.php?id_alternatif=<?php echo $row['id_alternatif'] ?>"><i class="fa fa-pencil"></i> Hapus</a> 
                                        </td>
                                        </tr>

                                        <?php } ?>
                                    </tbody>
                                </table>
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
