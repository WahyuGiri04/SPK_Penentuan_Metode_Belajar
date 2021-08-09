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
            <div class="row pad-botm">
            <?php
            $id_mapel = $_GET['id_mapel'];
            $sql = $koneksi->query("SELECT * FROM tab_mata_pelajaran where id_mapel = '$id_mapel'");
            $data_sql = $sql->fetch_assoc();
            $nama_mapel = $data_sql['nama_mapel'];
            $nama_sub_mapel = $data_sql['sub_mapel'];
            ?>
             <div class="col-md-12">
                <h4 class="header-line text-center"><?php echo $nama_mapel ?></h4>
                <h5 class="header-line text-center"><?php echo $nama_sub_mapel ?></h5>
            </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading text-center">
                            TABEL NILAI ALTERNATIF
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                            <table id="dataTables-example" class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>C1</th>
                                        <th>C2</th>
                                        <th>C3</th>
                                        <th>C4</th>
                                        <th>C5</th>
                                        <th>C6</th>
                                        <th>C7</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql_alternatif = $koneksi->query("SELECT * FROM tab_data WHERE id_mapel = '$id_mapel' order by id asc");
                                    while($data_alternatif = $sql_alternatif->fetch_assoc()){?>
                                        <tr>
                                            <td><?php echo $data_alternatif['c1'] ?></td>
                                            <td><?php echo $data_alternatif['c2'] ?></td>
                                            <td><?php echo $data_alternatif['c3'] ?></td>
                                            <td><?php echo $data_alternatif['c4'] ?></td>
                                            <td><?php echo $data_alternatif['c5'] ?></td>
                                            <td><?php echo $data_alternatif['c6'] ?></td>
                                            <td><?php echo $data_alternatif['c7'] ?></td>
                                        </tr>
                                    <?php    
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                     <!-- End  Kitchen Sink -->
                </div>
            </div> 
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading text-center">
                            TABEL NILAI ALTERNATIF YANG SUDAH DI KONVERT
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                            <table id="example1" class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Alternatif</th>
                                        <th>C1</th>
                                        <th>C2</th>
                                        <th>C3</th>
                                        <th>C4</th>
                                        <th>C5</th>
                                        <th>C6</th>
                                        <th>C7</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql_alternatif_1 = $koneksi->query("SELECT tab_alternatif.nama_alternatif,tab_data_konvert.c1,tab_data_konvert.c2,tab_data_konvert.c3,tab_data_konvert.c4,tab_data_konvert.c5,tab_data_konvert.c6,tab_data_konvert.c7 FROM tab_data_konvert LEFT JOIN tab_alternatif ON tab_alternatif.id_alternatif=tab_data_konvert.id_alternatif WHERE id_mapel = '$id_mapel' order by id ASC");
                                    while($data_alternatif_1 = $sql_alternatif_1->fetch_assoc()){?>
                                        <tr>
                                            <td><?php echo $data_alternatif_1['nama_alternatif'] ?></td>
                                            <td><?php echo $data_alternatif_1['c1'] ?></td>
                                            <td><?php echo $data_alternatif_1['c2'] ?></td>
                                            <td><?php echo $data_alternatif_1['c3'] ?></td>
                                            <td><?php echo $data_alternatif_1['c4'] ?></td>
                                            <td><?php echo $data_alternatif_1['c5'] ?></td>
                                            <td><?php echo $data_alternatif_1['c6'] ?></td>
                                            <td><?php echo $data_alternatif_1['c7'] ?></td>
                                        </tr>
                                    <?php    
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                     <!-- End  Kitchen Sink -->
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading text-center">
                            MATRIK NORMALISASI
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                            <?php
                            $id_mapel = $_GET['id_mapel'];
                            ?>
                            <table id = "example2" class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Alternatif</th>
                                        <th>C1</th>
                                        <th>C2</th>
                                        <th>C3</th>
                                        <th>C4</th>
                                        <th>C5</th>
                                        <th>C6</th>
                                        <th>C7</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    $query=$koneksi->query("SELECT sum(pow(c1,2)) as c1,sum(pow(c2,2)) as c2,sum(pow(c3,2)) as c3,sum(pow(c4,2)) as c4,sum(pow(c5,2)) as c5,sum(pow(c6,2)) as c6,sum(pow(c7,2)) as c7 from `tab_data_konvert` where id_mapel = '$id_mapel'");
                                    $data=$query->fetch_assoc();
                                    $total_c1 = $data['c1'];
                                    $total_c2 = $data['c2'];
                                    $total_c3 = $data['c3'];
                                    $total_c4 = $data['c4'];
                                    $total_c5 = $data['c5'];
                                    $total_c6 = $data['c6'];
                                    $total_c7 = $data['c7'];
                                    $akar_c1 = sqrt($total_c1);
                                    $akar_c2 = sqrt($total_c2);
                                    $akar_c3 = sqrt($total_c3);
                                    $akar_c4 = sqrt($total_c4);
                                    $akar_c5 = sqrt($total_c5);
                                    $akar_c6 = sqrt($total_c6);
                                    $akar_c7 = sqrt($total_c7);
                                    $query1=$koneksi->query("SELECT tab_alternatif.nama_alternatif,tab_data_konvert.c1,tab_data_konvert.c2,tab_data_konvert.c3,tab_data_konvert.c4,tab_data_konvert.c5,tab_data_konvert.c6,tab_data_konvert.c7 FROM `tab_data_konvert` LEFT JOIN tab_alternatif ON tab_alternatif.id_alternatif=tab_data_konvert.id_alternatif where id_mapel = '$id_mapel'");
                                    $no=1;
                                    while ($data1=$query1->fetch_assoc()) {
                                        $c1 = $data1['c1'];
                                        $c2 = $data1['c2'];
                                        $c3 = $data1['c3'];
                                        $c4 = $data1['c4'];
                                        $c5 = $data1['c5'];
                                        $c6 = $data1['c6'];
                                        $c7 = $data1['c7'];
                                        $hasil_normalisasi_c1 = $c1/$akar_c1;
                                        $hasil_normalisasi_c2 = $c2/$akar_c2;
                                        $hasil_normalisasi_c3 = $c3/$akar_c3;
                                        $hasil_normalisasi_c4 = $c4/$akar_c4;
                                        $hasil_normalisasi_c5 = $c5/$akar_c5;
                                        $hasil_normalisasi_c6 = $c6/$akar_c6;
                                        $hasil_normalisasi_c7 = $c7/$akar_c7;
                                        ?>
                                            <tr>
                                                <td><?php echo $data1['nama_alternatif'] ?></td>
                                                <td><?php echo round($hasil_normalisasi_c1,4); ?></td>
                                                <td><?php echo round($hasil_normalisasi_c2,4); ?></td>
                                                <td><?php echo round($hasil_normalisasi_c3,4); ?></td>
                                                <td><?php echo round($hasil_normalisasi_c4,4); ?></td>
                                                <td><?php echo round($hasil_normalisasi_c5,4); ?></td>
                                                <td><?php echo round($hasil_normalisasi_c6,4); ?></td>
                                                <td><?php echo round($hasil_normalisasi_c7,4); ?></td>
                                            </tr>
                                <?php  }
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                     <!-- End  Kitchen Sink -->
                </div>
            </div>   
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading text-center">
                            MATRIK NORMALISASI TERBOBOT
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                            <?php
                            $id_mapel = $_GET['id_mapel'];
                            ?>
                            <table id = "example3" class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Alternatif</th>
                                        <th>C1</th>
                                        <th>C2</th>
                                        <th>C3</th>
                                        <th>C4</th>
                                        <th>C5</th>
                                        <th>C6</th>
                                        <th>C7</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                     $sql1 = $koneksi->query('SELECT * FROM data_kriteria');
                                     $sql2 = $koneksi->query('SELECT sum(c1) as c1,sum(c2) as c2,sum(c3) as c3,sum(c4) as c4,sum(c5) as c5,sum(c6) as c6,sum(c7) as c7 from data_kriteria');
                                     $data2 = $sql2->fetch_array();
                                     while ($data = $sql1->fetch_array()) {
                                       $c1 = $data['C1']/$data2['c1'];
                                       $c2 = $data['C2']/$data2['c2'];
                                       $c3 = $data['C3']/$data2['c3'];
                                       $c4 = $data['C4']/$data2['c4'];
                                       $c5 = $data['C5']/$data2['c5'];
                                       $c6 = $data['C6']/$data2['c6'];
                                       $c7 = $data['C7']/$data2['c7'];
                                       $jumlah = $c1 + $c2 +$c3 + $c4 +$c5 +$c6 +$c7;
                                       $prioritas[] = $jumlah/7;
                                     }
                                    $query=$koneksi->query("SELECT sum(pow(c1,2)) as c1,sum(pow(c2,2)) as c2,sum(pow(c3,2)) as c3,sum(pow(c4,2)) as c4,sum(pow(c5,2)) as c5,sum(pow(c6,2)) as c6,sum(pow(c7,2)) as c7 from `tab_data_konvert` where id_mapel = '$id_mapel'");
                                    $data=$query->fetch_assoc();
                                    $total_c1 = $data['c1'];
                                    $total_c2 = $data['c2'];
                                    $total_c3 = $data['c3'];
                                    $total_c4 = $data['c4'];
                                    $total_c5 = $data['c5'];
                                    $total_c6 = $data['c6'];
                                    $total_c7 = $data['c7'];
                                    $akar_c1 = sqrt($total_c1);
                                    $akar_c2 = sqrt($total_c2);
                                    $akar_c3 = sqrt($total_c3);
                                    $akar_c4 = sqrt($total_c4);
                                    $akar_c5 = sqrt($total_c5);
                                    $akar_c6 = sqrt($total_c6);
                                    $akar_c7 = sqrt($total_c7);
                                    $query1=$koneksi->query("SELECT tab_alternatif.nama_alternatif,tab_data_konvert.c1,tab_data_konvert.c2,tab_data_konvert.c3,tab_data_konvert.c4,tab_data_konvert.c5,tab_data_konvert.c6,tab_data_konvert.c7 FROM `tab_data_konvert` left join tab_alternatif on tab_alternatif.id_alternatif=tab_data_konvert.id_alternatif where id_mapel = '$id_mapel'");
                                    $no=1;
                                    while ($data1=$query1->fetch_assoc()) {
                                        $c1 = $data1['c1'];
                                        $c2 = $data1['c2'];
                                        $c3 = $data1['c3'];
                                        $c4 = $data1['c4'];
                                        $c5 = $data1['c5'];
                                        $c6 = $data1['c6'];
                                        $c7 = $data1['c7'];
                                        $hasil_normalisasi_c1 = $c1/$akar_c1;
                                        $hasil_normalisasi_c2 = $c2/$akar_c2;
                                        $hasil_normalisasi_c3 = $c3/$akar_c3;
                                        $hasil_normalisasi_c4 = $c4/$akar_c4;
                                        $hasil_normalisasi_c5 = $c5/$akar_c5;
                                        $hasil_normalisasi_c6 = $c6/$akar_c6;
                                        $hasil_normalisasi_c7 = $c7/$akar_c7;

                                        $normalisasi_terbobot_c1 = $hasil_normalisasi_c1*$prioritas['0'] ;
                                        $normalisasi_terbobot_c2 = $hasil_normalisasi_c2*$prioritas['1'] ;
                                        $normalisasi_terbobot_c3 = $hasil_normalisasi_c3*$prioritas['2'] ;
                                        $normalisasi_terbobot_c4 = $hasil_normalisasi_c4*$prioritas['3'] ;
                                        $normalisasi_terbobot_c5 = $hasil_normalisasi_c5*$prioritas['4'] ;
                                        $normalisasi_terbobot_c6 = $hasil_normalisasi_c6*$prioritas['5'] ;
                                        $normalisasi_terbobot_c7 = $hasil_normalisasi_c7*$prioritas['6'] ;
                                        ?>
                                            <tr>
                                                <td><?php echo $data1['nama_alternatif'] ?></td>
                                                <td><?php echo round($normalisasi_terbobot_c1,4); ?></td>
                                                <td><?php echo round($normalisasi_terbobot_c2,4); ?></td>
                                                <td><?php echo round($normalisasi_terbobot_c3,4); ?></td>
                                                <td><?php echo round($normalisasi_terbobot_c4,4); ?></td>
                                                <td><?php echo round($normalisasi_terbobot_c5,4); ?></td>
                                                <td><?php echo round($normalisasi_terbobot_c6,4); ?></td>
                                                <td><?php echo round($normalisasi_terbobot_c7,4); ?></td>
                                            </tr>
                                    <?php  }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                     <!-- End  Kitchen Sink -->
                </div>
            </div> 
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading text-center">
                            Solusi Ideal POSITIF (Y<sup>+</sup>) dan NEGATIF (Y<sup>-</sup>)
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                            <?php
                            $id_mapel = $_GET['id_mapel'];
                            ?>
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Solusi Ideal</th>
                                        <th>C1</th>
                                        <th>C2</th>
                                        <th>C3</th>
                                        <th>C4</th>
                                        <th>C5</th>
                                        <th>C6</th>
                                        <th>C7</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                     $sql1 = $koneksi->query('SELECT * FROM data_kriteria');
                                     $sql2 = $koneksi->query('SELECT sum(c1) as c1,sum(c2) as c2,sum(c3) as c3,sum(c4) as c4,sum(c5) as c5,sum(c6) as c6,sum(c7) as c7 from data_kriteria');
                                     $data2 = $sql2->fetch_array();
                                     while ($data = $sql1->fetch_array()) {
                                       $c1 = $data['C1']/$data2['c1'];
                                       $c2 = $data['C2']/$data2['c2'];
                                       $c3 = $data['C3']/$data2['c3'];
                                       $c4 = $data['C4']/$data2['c4'];
                                       $c5 = $data['C5']/$data2['c5'];
                                       $c6 = $data['C6']/$data2['c6'];
                                       $c7 = $data['C7']/$data2['c7'];
                                       $jumlah = $c1 + $c2 +$c3 + $c4 +$c5 +$c6 +$c7;
                                       $prioritas[] = $jumlah/7;
                                     }
                                    $query=$koneksi->query("SELECT sum(pow(c1,2)) as c1,sum(pow(c2,2)) as c2,sum(pow(c3,2)) as c3,sum(pow(c4,2)) as c4,sum(pow(c5,2)) as c5,sum(pow(c6,2)) as c6,sum(pow(c7,2)) as c7 from `tab_data_konvert` where id_mapel = '$id_mapel'");
                                    $data=$query->fetch_assoc();
                                    $total_c1 = $data['c1'];
                                    $total_c2 = $data['c2'];
                                    $total_c3 = $data['c3'];
                                    $total_c4 = $data['c4'];
                                    $total_c5 = $data['c5'];
                                    $total_c6 = $data['c6'];
                                    $total_c7 = $data['c7'];
                                    $akar_c1 = sqrt($total_c1);
                                    $akar_c2 = sqrt($total_c2);
                                    $akar_c3 = sqrt($total_c3);
                                    $akar_c4 = sqrt($total_c4);
                                    $akar_c5 = sqrt($total_c5);
                                    $akar_c6 = sqrt($total_c6);
                                    $akar_c7 = sqrt($total_c7);
                                    $query1=$koneksi->query("SELECT * FROM `tab_data_konvert` where id_mapel = '$id_mapel'");
                                    $no=1;
                                    $normalisasi_terbobot_c1 = array();
                                    $normalisasi_terbobot_c2 = array();
                                    $normalisasi_terbobot_c3 = array();
                                    $normalisasi_terbobot_c4 = array();
                                    $normalisasi_terbobot_c5 = array();
                                    $normalisasi_terbobot_c6 = array();
                                    $normalisasi_terbobot_c7 = array();
                                    while ($data1=$query1->fetch_array()) {
                                        $c1 = $data1['c1'];
                                        $c2 = $data1['c2'];
                                        $c3 = $data1['c3'];
                                        $c4 = $data1['c4'];
                                        $c5 = $data1['c5'];
                                        $c6 = $data1['c6'];
                                        $c7 = $data1['c7'];
                                        $hasil_normalisasi_c1 = $c1/$akar_c1;
                                        $hasil_normalisasi_c2 = $c2/$akar_c2;
                                        $hasil_normalisasi_c3 = $c3/$akar_c3;
                                        $hasil_normalisasi_c4 = $c4/$akar_c4;
                                        $hasil_normalisasi_c5 = $c5/$akar_c5;
                                        $hasil_normalisasi_c6 = $c6/$akar_c6;
                                        $hasil_normalisasi_c7 = $c7/$akar_c7;

                                        $normalisasi_terbobot_c1[] = $hasil_normalisasi_c1*$prioritas['0'] ;
                                        $normalisasi_terbobot_c2[] = $hasil_normalisasi_c2*$prioritas['1'] ;
                                        $normalisasi_terbobot_c3[] = $hasil_normalisasi_c3*$prioritas['2'];
                                        $normalisasi_terbobot_c4[] = $hasil_normalisasi_c4*$prioritas['3'] ;
                                        $normalisasi_terbobot_c5[] = $hasil_normalisasi_c5*$prioritas['4'] ;
                                        $normalisasi_terbobot_c6[] = $hasil_normalisasi_c6*$prioritas['5'] ;
                                        $normalisasi_terbobot_c7[] = $hasil_normalisasi_c7*$prioritas['6'] ;
                                      }
                                      $ideal_positif_c1 = max($normalisasi_terbobot_c1);
                                      $ideal_positif_c2 = max($normalisasi_terbobot_c2);
                                      $ideal_positif_c3 = min($normalisasi_terbobot_c3);
                                      $ideal_positif_c4 = max($normalisasi_terbobot_c4);
                                      $ideal_positif_c5 = max($normalisasi_terbobot_c5);
                                      $ideal_positif_c6 = min($normalisasi_terbobot_c6);
                                      $ideal_positif_c7 = min($normalisasi_terbobot_c7);
                                      
                                      $ideal_negatif_c1 = min($normalisasi_terbobot_c1);
                                      $ideal_negatif_c2 = min($normalisasi_terbobot_c2);
                                      $ideal_negatif_c3 = max($normalisasi_terbobot_c3);
                                      $ideal_negatif_c4 = min($normalisasi_terbobot_c4);
                                      $ideal_negatif_c5 = min($normalisasi_terbobot_c5);
                                      $ideal_negatif_c6 = max($normalisasi_terbobot_c6);
                                      $ideal_negatif_c7 = max($normalisasi_terbobot_c7);
                                      ?>
                                      <tr>
                                        <th>Y<sup>+</sup></th>
                                        <th><?php echo round($ideal_positif_c1,6); ?></th>
                                        <th><?php echo round($ideal_positif_c2,6); ?></th>
                                        <th><?php echo round($ideal_positif_c3,6); ?></th>
                                        <th><?php echo round($ideal_positif_c4,6); ?></th>
                                        <th><?php echo round($ideal_positif_c5,6); ?></th>
                                        <th><?php echo round($ideal_positif_c6,6); ?></th>
                                        <th><?php echo round($ideal_positif_c7,6); ?></th>  
                                      </tr>
                                      <tr>
                                        <th>Y<sup>-</sup></th>
                                        <th><?php echo round($ideal_negatif_c1,6); ?></th>
                                        <th><?php echo round($ideal_negatif_c2,6); ?></th>
                                        <th><?php echo round($ideal_negatif_c3,6); ?></th>
                                        <th><?php echo round($ideal_negatif_c4,6); ?></th>
                                        <th><?php echo round($ideal_negatif_c5,6); ?></th>
                                        <th><?php echo round($ideal_negatif_c6,6); ?></th>
                                        <th><?php echo round($ideal_negatif_c7,6); ?></th>  
                                      </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                     <!-- End  Kitchen Sink -->
                </div>
            </div> 
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading text-center">
                            <h2>Jarak antara Alternatif dengan Solusi Ideal POSITIF (D<sup>+</sup>) dan NEGATIF (D<sup>-</sup>)</h2>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                            <table id = "example4" class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Alternatif</th>
                                        <th>POSITIF(D<sup>+</sup>)</th>
                                        <th>NEGATIF(D<sup>-</sup>)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                     $sql1 = $koneksi->query('SELECT * FROM data_kriteria');
                                     $sql2 = $koneksi->query('SELECT sum(c1) as c1,sum(c2) as c2,sum(c3) as c3,sum(c4) as c4,sum(c5) as c5,sum(c6) as c6,sum(c7) as c7 from data_kriteria');
                                     $data2 = $sql2->fetch_array();
                                     while ($data = $sql1->fetch_array()) {
                                       $c1 = $data['C1']/$data2['c1'];
                                       $c2 = $data['C2']/$data2['c2'];
                                       $c3 = $data['C3']/$data2['c3'];
                                       $c4 = $data['C4']/$data2['c4'];
                                       $c5 = $data['C5']/$data2['c5'];
                                       $c6 = $data['C6']/$data2['c6'];
                                       $c7 = $data['C7']/$data2['c7'];
                                       $jumlah = $c1 + $c2 +$c3 + $c4 +$c5 +$c6 +$c7;
                                       $prioritas[] = $jumlah/7;
                                     }
                                    $query=$koneksi->query("SELECT sum(pow(c1,2)) as c1,sum(pow(c2,2)) as c2,sum(pow(c3,2)) as c3,sum(pow(c4,2)) as c4,sum(pow(c5,2)) as c5,sum(pow(c6,2)) as c6,sum(pow(c7,2)) as c7 from `tab_data_konvert` where id_mapel = '$id_mapel'");
                                    $data=$query->fetch_assoc();
                                    $total_c1 = $data['c1'];
                                    $total_c2 = $data['c2'];
                                    $total_c3 = $data['c3'];
                                    $total_c4 = $data['c4'];
                                    $total_c5 = $data['c5'];
                                    $total_c6 = $data['c6'];
                                    $total_c7 = $data['c7'];
                                    $akar_c1 = sqrt($total_c1);
                                    $akar_c2 = sqrt($total_c2);
                                    $akar_c3 = sqrt($total_c3);
                                    $akar_c4 = sqrt($total_c4);
                                    $akar_c5 = sqrt($total_c5);
                                    $akar_c6 = sqrt($total_c6);
                                    $akar_c7 = sqrt($total_c7);

                                    $normalisasi_terbobot_c1 = array();
                                    $normalisasi_terbobot_c2 = array();
                                    $normalisasi_terbobot_c3 = array();
                                    $normalisasi_terbobot_c4 = array();
                                    $normalisasi_terbobot_c5 = array();
                                    $normalisasi_terbobot_c6 = array();
                                    $normalisasi_terbobot_c7 = array();
                                    $query1=$koneksi->query("SELECT * FROM `tab_data_konvert` where id_mapel = '$id_mapel'");
                                    $no=1;
                                    while ($data1=$query1->fetch_array()) {
                                        $c1 = $data1['c1'];
                                        $c2 = $data1['c2'];
                                        $c3 = $data1['c3'];
                                        $c4 = $data1['c4'];
                                        $c5 = $data1['c5'];
                                        $c6 = $data1['c6'];
                                        $c7 = $data1['c7'];
                                        $hasil_normalisasi_c1 = $c1/$akar_c1;
                                        $hasil_normalisasi_c2 = $c2/$akar_c2;
                                        $hasil_normalisasi_c3 = $c3/$akar_c3;
                                        $hasil_normalisasi_c4 = $c4/$akar_c4;
                                        $hasil_normalisasi_c5 = $c5/$akar_c5;
                                        $hasil_normalisasi_c6 = $c6/$akar_c6;
                                        $hasil_normalisasi_c7 = $c7/$akar_c7;

                                        $normalisasi_terbobot_c1[] = $hasil_normalisasi_c1*$prioritas['0'] ;
                                        $normalisasi_terbobot_c2[] = $hasil_normalisasi_c2*$prioritas['1'] ;
                                        $normalisasi_terbobot_c3[] = $hasil_normalisasi_c3*$prioritas['2'];
                                        $normalisasi_terbobot_c4[] = $hasil_normalisasi_c4*$prioritas['3'] ;
                                        $normalisasi_terbobot_c5[] = $hasil_normalisasi_c5*$prioritas['4'] ;
                                        $normalisasi_terbobot_c6[] = $hasil_normalisasi_c6*$prioritas['5'] ;
                                        $normalisasi_terbobot_c7[] = $hasil_normalisasi_c7*$prioritas['6'] ;
                                      }
                                      $ideal_positif_c1 = max($normalisasi_terbobot_c1);
                                      $ideal_positif_c2 = max($normalisasi_terbobot_c2);
                                      $ideal_positif_c3 = min($normalisasi_terbobot_c3);
                                      $ideal_positif_c4 = max($normalisasi_terbobot_c4);
                                      $ideal_positif_c5 = max($normalisasi_terbobot_c5);
                                      $ideal_positif_c6 = min($normalisasi_terbobot_c6);
                                      $ideal_positif_c7 = min($normalisasi_terbobot_c7);
                                      
                                      $ideal_negatif_c1 = min($normalisasi_terbobot_c1);
                                      $ideal_negatif_c2 = min($normalisasi_terbobot_c2);
                                      $ideal_negatif_c3 = max($normalisasi_terbobot_c3);
                                      $ideal_negatif_c4 = min($normalisasi_terbobot_c4);
                                      $ideal_negatif_c5 = min($normalisasi_terbobot_c5);
                                      $ideal_negatif_c6 = max($normalisasi_terbobot_c6);
                                      $ideal_negatif_c7 = max($normalisasi_terbobot_c7);

                                      $id_perangkingan = array();
                                      $sql_id_rangking = $koneksi->query("SELECT * FROM tab_perangkingan WHERE id_mapel = '$id_mapel'");
                                      while($data_id_rangking = $sql_id_rangking->fetch_assoc()){
                                        $id_perangkingan[] = $data_id_rangking['id_rangking'];
                                      }

                                      $query3=$koneksi->query("SELECT tab_alternatif.id_alternatif,tab_alternatif.nama_alternatif,tab_data_konvert.c1,tab_data_konvert.c2,tab_data_konvert.c3,tab_data_konvert.c4,tab_data_konvert.c5,tab_data_konvert.c6,tab_data_konvert.c7 FROM `tab_data_konvert` left join tab_alternatif on tab_alternatif.id_alternatif=tab_data_konvert.id_alternatif where id_mapel = '$id_mapel'");
                                      $no=1;
                                      $index = 0 ;
                                      while ($data3=$query3->fetch_array()) {
                                        $nama_siswa = $data3['id_alternatif'];
                                        $ce1 = $data3['c1'];
                                        $ce2 = $data3['c2'];
                                        $ce3 = $data3['c3'];
                                        $ce4 = $data3['c4'];
                                        $ce5 = $data3['c5'];
                                        $ce6 = $data3['c6'];
                                        $ce7 = $data3['c7'];
                                        $hasil_normalisasi_ce1 = $ce1/$akar_c1;
                                        $hasil_normalisasi_ce2 = $ce2/$akar_c2;
                                        $hasil_normalisasi_ce3 = $ce3/$akar_c3;
                                        $hasil_normalisasi_ce4 = $ce4/$akar_c4;
                                        $hasil_normalisasi_ce5 = $ce5/$akar_c5;
                                        $hasil_normalisasi_ce6 = $ce6/$akar_c6;
                                        $hasil_normalisasi_ce7 = $ce7/$akar_c7;

                                        $normalisasi_terbobot_ce1 = $hasil_normalisasi_ce1*$prioritas['0'] ;
                                        $normalisasi_terbobot_ce2 = $hasil_normalisasi_ce2*$prioritas['1'] ;
                                        $normalisasi_terbobot_ce3 = $hasil_normalisasi_ce3*$prioritas['2'];
                                        $normalisasi_terbobot_ce4 = $hasil_normalisasi_ce4*$prioritas['3'] ;
                                        $normalisasi_terbobot_ce5 = $hasil_normalisasi_ce5*$prioritas['4'] ;
                                        $normalisasi_terbobot_ce6 = $hasil_normalisasi_ce6*$prioritas['5'] ;
                                        $normalisasi_terbobot_ce7 = $hasil_normalisasi_ce7*$prioritas['6'] ;
                                      
                                        $jarak_alternatif_positif = (pow(($ideal_positif_c1 - $normalisasi_terbobot_ce1),2)) + (pow(($ideal_positif_c2 - $normalisasi_terbobot_ce2),2)) + (pow(($ideal_positif_c3 - $normalisasi_terbobot_ce3),2)) + (pow(($ideal_positif_c4 - $normalisasi_terbobot_ce4),2)) + (pow(($ideal_positif_c5 - $normalisasi_terbobot_ce5),2)) + (pow(($ideal_positif_c6 - $normalisasi_terbobot_ce6),2)) + (pow(($ideal_positif_c7 - $normalisasi_terbobot_ce7),2)) ;
                                        $hasil_jarak_alternatif_positif = sqrt($jarak_alternatif_positif);
                                        $jarak_alternatif_negatif = (pow(($ideal_negatif_c1 - $normalisasi_terbobot_ce1),2)) + (pow(($ideal_negatif_c2 - $normalisasi_terbobot_ce2),2)) + (pow(($ideal_negatif_c3 - $normalisasi_terbobot_ce3),2)) + (pow(($ideal_negatif_c4 - $normalisasi_terbobot_ce4),2)) + (pow(($ideal_negatif_c5 - $normalisasi_terbobot_ce5),2)) + (pow(($ideal_negatif_c6 - $normalisasi_terbobot_ce6),2)) + (pow(($ideal_negatif_c7 - $normalisasi_terbobot_ce7),2)) ;
                                        $hasil_jarak_alternatif_negatif = sqrt($jarak_alternatif_negatif);
                                        
                                        $nilai_preferensi = (($hasil_jarak_alternatif_negatif)/($hasil_jarak_alternatif_negatif+$hasil_jarak_alternatif_positif));

                                        $update_perangkingan = $koneksi->query("UPDATE `tab_perangkingan` SET nilai_preferensi = '$nilai_preferensi' WHERE id_rangking ='$id_perangkingan[$index]'");
                                        $index++;
                                        ?>
                                      <tr>
                                        <td> <?php echo $no++; ?> </td>
                                        <td><?php echo $data3['nama_alternatif'] ?></td>
                                        <td><?php echo round($hasil_jarak_alternatif_positif,6); ?></td>
                                        <td><?php echo round($hasil_jarak_alternatif_negatif,6); ?></td>
                                      </tr>
                                      <?php
                                      }
                                      ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                     <!-- End  Kitchen Sink -->
                </div>
            </div> 
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading text-center">
                            <h2>HASIL ANALISI</h2>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                            <table id = "example5" class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Alternatif</th>
                                        <th>Nilai Preferensi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $nomer = 1;
                                    $query_select_data = $koneksi->query("SELECT * FROM tab_perangkingan left join tab_alternatif on tab_alternatif.id_alternatif=tab_perangkingan.id_alternatif where id_mapel = '$id_mapel' ORDER BY nilai_preferensi DESC LIMIT 1");
                                    while($data_select = $query_select_data->fetch_assoc()){
                                        $hasil_nilai_preferensi = $data_select['nilai_preferensi'] * 100 ; 
                                        echo "<tr>";
                                            echo "<td>".$nomer++."</td>";
                                            echo "<td>".$data_select['nama_alternatif']."</td>";
                                            echo "<td>".round($hasil_nilai_preferensi,3)." % </td>";
                                        echo "</tr>";
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                     <!-- End  Kitchen Sink -->
                </div>
            </div>  
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading text-center">
                            <h2>CETAK HASIL PERANGKINGAN</h2>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive text-center">
                            <a href="perangkingan.php?id_mapel=<?php echo $id_mapel ?>" class="btn btn-danger "><i class="fa fa-backward"></i> Kembali</a>
                            <a target="_blank" href="cetak_rangking.php?id_mapel=<?php echo $id_mapel ?>" class="btn btn-warning "><i class="fa fa-print"></i> Print Hasil</a>  
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
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>

    <script>
    $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable();
        $('#example3').DataTable();
        $('#example4').DataTable();
        $('#example5').DataTable();
    });
    </script>
  
</body>
</html>
