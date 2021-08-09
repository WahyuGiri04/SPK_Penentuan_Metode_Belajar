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
<?php 
    $id_mapel = $_GET['id_mapel'];
    $query = $koneksi->query("SELECT * FROM tab_mata_pelajaran WHERE id_mapel = '$id_mapel'");
    $data_query = $query->fetch_assoc();

    $nama_kasus = $data_query['nama_mapel'];
    $nama_sub_kasus = $data_query['sub_mapel'];
?>
     <div class="content-wrapper">
        <div class="container">
            <div class="row pad-botm">
                <div class="col-md-12">
                    <h3 class="header-line"> <?php echo $nama_kasus; ?> <sub>( <?php echo $nama_sub_kasus; ?> )</sub></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading text-center">
                            TABEL ALTERNATIF YANG AKAN DI GUNAKAN
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <ul class="nav nav-tabs">
                                    <form role="form" action="proses_pengisian_nilai.php" method="post">
                                    <input hidden name ="id_mapel" value = "<?php echo $id_mapel ?>" type="text" />
                                    <input hidden name ="nama_mapel" value = "<?php echo $nama_kasus ?>" type="text" />
                                    <input hidden name ="nama_sub_mapel" value = "<?php echo $nama_sub_kasus ?>" type="text" />
                                        <div class="form-group">
                                            <label> Alternatif</label>
                                            <select name = "id_alternatif" class="form-control">
                                            <?php $sql = $koneksi->query("SELECT * FROM tab_alternatif");
                                            while ($row = $sql->fetch_assoc()) {
                                            ?>
                                                <option value = "<?php echo $row['id_alternatif'] ?>" > <?php echo $row['nama_alternatif'] ?></option>
                                            <?php }
                                            ?>
                                            </select>
                                        </div>
                                        <button type="submit" class="btn btn-danger"><i class="fa fa-plus"></i> Tambahkan Alternatif </button>
                                    </form>
                                </ul>
                                
                                <br>
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Alternatif</th>
                                            <th>C1</th>
                                            <th>C2</th>
                                            <th>C3</th>
                                            <th>C4</th>
                                            <th>C5</th>
                                            <th>C6</th>
                                            <th>C7</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $no = 1 ;
                                    $sql_alternatif = $koneksi->query("SELECT * FROM tab_data inner JOIN tab_alternatif ON tab_alternatif.id_alternatif=tab_data.id_alternatif WHERE id_mapel = '$id_mapel'");
                                    while($data_alternatif = $sql_alternatif->fetch_assoc()){?>
                                        <tr>
                                            <td><?php echo $no++ ?></td>
                                            <td><?php echo $data_alternatif['nama_alternatif'] ?></td>
                                            <td><?php echo $data_alternatif['c1'] ?></td>
                                            <td><?php echo $data_alternatif['c2'] ?></td>
                                            <td><?php echo $data_alternatif['c3'] ?></td>
                                            <td><?php echo $data_alternatif['c4'] ?></td>
                                            <td><?php echo $data_alternatif['c5'] ?></td>
                                            <td><?php echo $data_alternatif['c6'] ?></td>
                                            <td><?php echo $data_alternatif['c7'] ?></td>
                                            <td>
                                                <a class="btn btn-danger" onclick="return confirm('Apakah anda yakin ?');" href="hapus_alternatif.php?id=<?php echo $data_alternatif['id'] ?>&id_mapel=<?php echo $id_mapel ?>"><i class="fa fa-pencil"></i> Hapus</a> 
                                            </td>
                                        </tr>
                                    <?php    
                                    }
                                    ?>
                                    </tbody>
                                </table>
                            </div>    
                        </div>
                    </div>
                     <!-- End  Kitchen Sink -->
                </div>
            </div>
            <?php
            $select_data = $koneksi->query("SELECT count(id) as jumlah FROM tab_data WHERE id_mapel = '$id_mapel'");
            $data_select = $select_data->fetch_assoc();
            $jumlah = $data_select['jumlah'];
            if($jumlah > 0 ){?>
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading text-center">
                                <h2>CEK HASIL ANALSISI</h2>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive text-center">
                                <a href="hasil_analisis.php?id_mapel=<?php echo $id_mapel ?>" class="btn btn-warning "><i class="fa fa-file"></i> Cek Hasil</a>  
                            </div>
                        </div>
                        <!-- End  Kitchen Sink -->
                    </div>
                </div>
            <?php
            }
            ?>     
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
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
  
</body>
</html>
