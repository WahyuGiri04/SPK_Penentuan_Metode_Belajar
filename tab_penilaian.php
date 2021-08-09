<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
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
<?php include_once "koneksi.php" ?>
     <div class="content-wrapper">
        <div class="container">
            <div class="row pad-botm">
                <div class="col-md-12">
                    <h4 class="header-line">Tabel Penilaian</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Tujuan Pengajaran
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <?php
                                $query_c1 = $koneksi->query("SELECT * FROM tab_sub WHERE kode_kriteria = 'C1'");
                                while($data_c1 = $query_c1->fetch_assoc()){
                                    $nilai_c1[] = $data_c1['nama_sub'];
                                }
                                ?>
                                <p><b><?php echo "( ".implode($nilai_c1, ", ")." )" ?></b></p>
                                <table class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th align="center">Sub Kriteria</th>
                                        <th>Nilai</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql_nilai_c1 = $koneksi->query("SELECT * FROM tab_penilaian WHERE kode_kriteria = 'C1'");
                                    while($data_nilai_c1 = $sql_nilai_c1->fetch_assoc()){?>
                                        <tr>
                                            <td><?php echo $data_nilai_c1['range_nilai'] ?></td>
                                            <td><?php echo $data_nilai_c1['nilai'] ?></td>
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
                <div class="col-md-6">
                     <!--   Basic Table  -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Materi Pembelajaran
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <?php
                                $query_c2 = $koneksi->query("SELECT * FROM tab_sub WHERE kode_kriteria = 'C2'");
                                while($data_c2 = $query_c2->fetch_assoc()){
                                    $nilai_c2[] = $data_c2['nama_sub'];
                                }
                                ?>
                                <p><b><?php echo "( ".implode($nilai_c2, ", ")." )" ?></b></p>
                                <table class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th align="center">Sub Kriteria</th>
                                        <th>Nilai</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql_nilai_c2 = $koneksi->query("SELECT * FROM tab_penilaian WHERE kode_kriteria = 'C2'");
                                    while($data_nilai_c2 = $sql_nilai_c2->fetch_assoc()){?>
                                        <tr>
                                            <td><?php echo $data_nilai_c2['range_nilai'] ?></td>
                                            <td><?php echo $data_nilai_c2['nilai'] ?></td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Waktu Pembelajaran
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th align="center">Sub Kriteria</th>
                                            <th>Nilai</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $sql_nilai_c3 = $koneksi->query("SELECT * FROM tab_penilaian WHERE kode_kriteria = 'C3'");
                                    while($data_nilai_c3 = $sql_nilai_c3->fetch_assoc()){?>
                                        <tr>
                                            <td><?php echo $data_nilai_c3['range_nilai'] ?></td>
                                            <td><?php echo $data_nilai_c3['nilai'] ?></td>
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
                <div class="col-md-6">
                     <!--   Basic Table  -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Kemampuan Guru
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <?php
                                $query_c4 = $koneksi->query("SELECT * FROM tab_sub WHERE kode_kriteria = 'C4'");
                                while($data_c4 = $query_c4->fetch_assoc()){
                                    $nilai_c4[] = $data_c4['nama_sub'];
                                }
                                ?>
                                <p><b><?php echo "( ".implode($nilai_c4, ", ")." )" ?></b></p>
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th align="center">Sub Kriteria</th>
                                            <th>Nilai</th>
                                        </tr> 
                                    </thead>
                                    <tbody>
                                    <?php
                                    $sql_nilai_c4 = $koneksi->query("SELECT * FROM tab_penilaian WHERE kode_kriteria = 'C4'");
                                    while($data_nilai_c4 = $sql_nilai_c4->fetch_assoc()){?>
                                        <tr>
                                            <td><?php echo $data_nilai_c4['range_nilai'] ?></td>
                                            <td><?php echo $data_nilai_c4['nilai'] ?></td>
                                        </tr>
                                    <?php
                                    }
                                    ?>  
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Kemampuan Siswa
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <?php
                                $query_c5 = $koneksi->query("SELECT * FROM tab_sub WHERE kode_kriteria = 'C5'");
                                while($data_c5 = $query_c5->fetch_assoc()){
                                    $nilai_c5[] = $data_c5['nama_sub'];
                                }
                                ?>
                                <p><b><?php echo "(".implode($nilai_c5, ", ").")" ?></b></p>
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th align="center">Sub Kriteria</th>
                                            <th>Nilai</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $sql_nilai_c5 = $koneksi->query("SELECT * FROM tab_penilaian WHERE kode_kriteria = 'C5'");
                                    while($data_nilai_c5 = $sql_nilai_c5->fetch_assoc()){?>
                                        <tr>
                                            <td><?php echo $data_nilai_c5['range_nilai'] ?></td>
                                            <td><?php echo $data_nilai_c5['nilai'] ?></td>
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
                <div class="col-md-6">
                     <!--   Basic Table  -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Fasilitas
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <?php
                                $query_c6 = $koneksi->query("SELECT * FROM tab_sub WHERE kode_kriteria = 'C6'");
                                while($data_c6 = $query_c6->fetch_assoc()){
                                    $nilai_c6[] = $data_c6['nama_sub'];
                                }
                                ?>
                                <p><b><?php echo "( ".implode($nilai_c6, ", ")." )" ?></b></p>
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th align="center">Sub Kriteria</th>
                                            <th>Nilai</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $sql_nilai_c6 = $koneksi->query("SELECT * FROM tab_penilaian WHERE kode_kriteria = 'C6'");
                                    while($data_nilai_c6 = $sql_nilai_c6->fetch_assoc()){?>
                                        <tr>
                                            <td><?php echo $data_nilai_c6['range_nilai'] ?></td>
                                            <td><?php echo $data_nilai_c6['nilai'] ?></td>
                                        </tr>
                                    <?php
                                    }
                                    ?>  
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Jumlah Siswa
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th align="center">Sub Kriteria</th>
                                            <th>Nilai</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $sql_nilai_c7 = $koneksi->query("SELECT * FROM tab_penilaian WHERE kode_kriteria = 'C7'");
                                    while($data_nilai_c7 = $sql_nilai_c7->fetch_assoc()){?>
                                        <tr>
                                            <td><?php echo $data_nilai_c7['range_nilai'] ?></td>
                                            <td><?php echo $data_nilai_c7['nilai'] ?></td>
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
