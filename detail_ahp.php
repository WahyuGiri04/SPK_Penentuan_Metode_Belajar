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
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading text-center">
                            TABEL PEMBOBOTAN KRITERIA
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                            <?php
                            $sql = $koneksi->query('SELECT * FROM data_kriteria');
                            $sql2 = $koneksi->query('SELECT sum(c1) as c1,sum(c2) as c2,sum(c3) as c3,sum(c4) as c4,sum(c5) as c5,sum(c6) as c6,sum(c7) as c7 from data_kriteria');
                            ?>
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Kode</th>
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
                                    while ($row = $sql->fetch_array()) {
                                        echo ("<tr><td align=\"center\">".$row[1]."</td>");
                                        echo ("<td align=\"center\">".$row[2]."</td>");
                                        echo ("<td align=\"center\">".$row[3]."</td>");
                                        echo ("<td align=\"center\">".$row[4]."</td>");
                                        echo ("<td align=\"center\">".$row[5]."</td>");
                                        echo ("<td align=\"center\">".$row[6]."</td>");
                                        echo ("<td align=\"center\">".$row[7]."</td>");
                                        echo ("<td align=\"center\">".$row[8]."</td>");
                                        echo "</tr>";
                                    }
                                    ?>
                                </tbody>
                                <tfoot>
                                <tr>
                                <td>JUMLAH TOTAL</td>
                                <?php 
                                    while ($row2 = $sql2->fetch_array()){
                                    echo ("<td align=\"center\">".$row2[0]."</td>");
                                    echo ("<td align=\"center\">".$row2[1]."</td>");
                                    echo ("<td align=\"center\">".$row2[2]."</td>");
                                    echo ("<td align=\"center\">".$row2[3]."</td>");
                                    echo ("<td align=\"center\">".$row2[4]."</td>");
                                    echo ("<td align=\"center\">".$row2[5]."</td>");
                                    echo ("<td align=\"center\">".$row2[6]."</td>");
                                    }?>
                                </tr>
                                </tfoot>
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
                            TABEL PEMBOBOTAN KRITERIA
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Kode</th>
                                        <th>C1</th>
                                        <th>C2</th>
                                        <th>C3</th>
                                        <th>C4</th>
                                        <th>C5</th>
                                        <th>C6</th>
                                        <th>C7</th>
                                        <th>Prioritas Vektor</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                $sql = $koneksi->query('SELECT * FROM data_kriteria');
                                $sql2 = $koneksi->query('SELECT sum(c1) as c1,sum(c2) as c2,sum(c3) as c3,sum(c4) as c4,sum(c5) as c5,sum(c6) as c6,sum(c7) as c7 from data_kriteria');
                                $row2 = $sql2->fetch_array();
                                $jumlahc1=0;
                                $jumlahc2=0;
                                $jumlahc3=0;
                                $jumlahc4=0;
                                $jumlahc5=0;
                                $jumlahc6=0;
                                $jumlahc7=0;

                                while ($row = $sql->fetch_array()) {

                                    $c1 = $row['C1']/$row2['c1'];
                                    $c2 = $row['C2']/$row2['c2'];
                                    $c3 = $row['C3']/$row2['c3'];
                                    $c4 = $row['C4']/$row2['c4'];
                                    $c5 = $row['C5']/$row2['c5'];
                                    $c6 = $row['C6']/$row2['c6'];
                                    $c7 = $row['C7']/$row2['c7'];
                                    $jumlah = $c1 + $c2 +$c3 + $c4 +$c5 +$c6 +$c7;
                                    $prioritas = $jumlah/7;
                                    
                                    $jumlahc1+=$c1;
                                    $jumlahc2+=$c2;
                                    $jumlahc3+=$c3;
                                    $jumlahc4+=$c4;
                                    $jumlahc5+=$c5;
                                    $jumlahc6+=$c6;
                                    $jumlahc7+=$c7;
                                    ?>

                                    <tr>
                                        <td align="center"><?php echo $row[1] ;?></td>
                                        <td align="center"><?php echo round($c1,4) ;?></td>
                                        <td align="center"><?php echo round($c2,4) ;?></td>
                                        <td align="center"><?php echo round($c3,4) ;?></td>
                                        <td align="center"><?php echo round($c4,4) ;?></td>
                                        <td align="center"><?php echo round($c5,4) ;?></td>
                                        <td align="center"><?php echo round($c6,4) ; ?></td>
                                        <td align="center"><?php echo round($c7,4) ; ?></td>
                                        <td align="center"><?php echo round($prioritas,4) ; ?></td>
                                </tr>
                                <?php }?>
                                
                                </tbody>
                                <tfoot>
                                <tr>
                                <td>JUMLAH TOTAL</td>
                                    <td align="center"> <?php echo $jumlahc1 ;?></td>
                                    <td align="center"> <?php echo $jumlahc2 ;?></td>
                                    <td align="center"> <?php echo $jumlahc3 ;?></td>
                                    <td align="center"> <?php echo $jumlahc4 ;?></td>
                                    <td align="center"> <?php echo $jumlahc5 ;?></td>
                                    <td align="center"> <?php echo $jumlahc6 ;?></td>
                                    <td align="center"> <?php echo $jumlahc7 ;?></td>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                     <!-- End  Kitchen Sink -->
                </div>
            </div>           
            <div class="row">
                <div class="col-md-6">
                  <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Matriks Konsistensi
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Kode</th>
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
                                    $sql = $koneksi->query('SELECT * FROM data_kriteria');
                                    $sql2 = $koneksi->query('SELECT sum(c1) as c1,sum(c2) as c2,sum(c3) as c3,sum(c4) as c4,sum(c5) as c5,sum(c6) as c6,sum(c7) as c7 from data_kriteria');
                                    $row2 = $sql2->fetch_array();
                                    $no = 1 ;
                                    while ($row = $sql->fetch_array()) {

                                        $c1 =  $row['C1'];
                                        $c2 = $row['C2'];
                                        $c3 = $row['C3'];
                                        $c4 = $row['C4'];
                                        $c5 = $row['C5'];
                                        $c6 = $row['C6'];
                                        $c7 = $row['C7'];
                                        ?>

                                        <tr>
                                            <td align="center"><?php echo "C".$no++ ;?></td>
                                            <td align="center"><?php echo round($c1,4) ;?></td>
                                            <td align="center"><?php echo round($c2,4) ;?></td>
                                            <td align="center"><?php echo round($c3,4) ;?></td>
                                            <td align="center"><?php echo round($c4,4) ;?></td>
                                            <td align="center"><?php echo round($c5,4) ;?></td>
                                            <td align="center"><?php echo round($c6,4) ; ?></td>
                                            <td align="center"><?php echo round($c7,4) ; ?></td>
                                    </tr>
                                    <?php }?>      
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                     <!-- End  Kitchen Sink -->
                </div>
                <div class="col-md-3">
                     <!--   Basic Table  -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Prioritas Vektor
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Nilai</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php
                                            $sql = $koneksi->query('SELECT * FROM data_kriteria');
                                            $sql2 = $koneksi->query('SELECT sum(c1) as c1,sum(c2) as c2,sum(c3) as c3,sum(c4) as c4,sum(c5) as c5,sum(c6) as c6,sum(c7) as c7 from data_kriteria');
                                            $row2 = $sql2->fetch_array();
                                            $jumlahc1=0;
                                            $jumlahc2=0;
                                            $jumlahc3=0;
                                            $jumlahc4=0;
                                            $jumlahc5=0;
                                            $jumlahc6=0;
                                            $jumlahc7=0;
             
                                           while ($row = $sql->fetch_array()) {
             
                                             $c1 = $row['C1']/$row2['c1'];
                                             $c2 = $row['C2']/$row2['c2'];
                                             $c3 = $row['C3']/$row2['c3'];
                                             $c4 = $row['C4']/$row2['c4'];
                                             $c5 = $row['C5']/$row2['c5'];
                                             $c6 = $row['C6']/$row2['c6'];
                                             $c7 = $row['C7']/$row2['c7'];
                                             $jumlah = $c1 + $c2 +$c3 + $c4 +$c5 +$c6 +$c7;
                                             $prioritas = $jumlah/7;
                                             
                                             $jumlahc1+=$c1;
                                             $jumlahc2+=$c2;
                                             $jumlahc3+=$c3;
                                             $jumlahc4+=$c4;
                                             $jumlahc5+=$c5;
                                             $jumlahc6+=$c6;
                                             $jumlahc7+=$c7;
                                             ?>
             
                                             <tr>
                                                 <td align="center"><?php echo round($prioritas,4) ; ?></td>
                                            </tr>
                                           <?php }?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                      <!-- End  Basic Table  -->
                </div>
                <div class="col-md-3">
                     <!--   Basic Table  -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Hasil
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Hasil</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      <?php 
                                          $sql = $koneksi->query('SELECT * FROM data_kriteria');
                                          $sql2 = $koneksi->query('SELECT sum(c1) as c1,sum(c2) as c2,sum(c3) as c3,sum(c4) as c4,sum(c5) as c5,sum(c6) as c6,sum(c7) as c7 from data_kriteria');
                                          $row2 = $sql2->fetch_array();

                                          $prioritas = [];
                                          $C_1= [];
                                          $C_2= [];
                                          $C_3= [];
                                          $C_4= [];
                                          $C_5= [];
                                          $C_6= [];
                                          $C_7= [];
                                          while ($row = $sql->fetch_array()) {
             
                                            $c1 = $row['C1']/$row2['c1'];
                                            $c2 = $row['C2']/$row2['c2'];
                                            $c3 = $row['C3']/$row2['c3'];
                                            $c4 = $row['C4']/$row2['c4'];
                                            $c5 = $row['C5']/$row2['c5'];
                                            $c6 = $row['C6']/$row2['c6'];
                                            $c7 = $row['C7']/$row2['c7'];
                                            $jumlah = $c1 + $c2 +$c3 + $c4 +$c5 +$c6 +$c7;
                                            array_push($prioritas, $jumlah/7);
                                            // print_r($prioritas);
                                            // echo $jumlah/7;
                                            
                                            $C_1[] = $row['C1'];
                                            $C_2[]= $row['C2'];
                                            $C_3[]= $row['C3'];
                                            $C_4[]= $row['C4'];
                                            $C_5[]= $row['C5'];
                                            $C_6[]= $row['C6'];
                                            $C_7[]= $row['C7'];
                                            // print_r($row['C1']);
                                            // $matrik1 = $row['C2'];
                                            // $matrik1 = ($row['C1']*$prioritas)+($row['C2']*$prioritas)+($row['C3']*$prioritas)+($row['C4']*$prioritas)+($row['C5']*$prioritas)+($row['C6']*$prioritas)+($row['C7']*$prioritas);

                                            // $matrik1 = ($C_1[0]*$prioritas[0])+($C_2[0]*$prioritas[1])+($C_3[0]*$prioritas[2])+($C_4[0]*$prioritas[3])+($C_5[0]*$prioritas[4])+($C_6[0]*$prioritas[5])+($C_7[0]*$prioritas[6]);
                                            // $matrik2 = ($C_1[1]*$prioritas[0])+($C_2[1]*$prioritas[1])+($C_3[1]*$prioritas[2])+($C_4[1]*$prioritas[3])+($C_5[1]*$prioritas[4])+($C_6[1]*$prioritas[5])+($C_7[1]*$prioritas[6]);
                                            // $matrik3 = ($C_1[2]*$prioritas[0])+($C_2[2]*$prioritas[1])+($C_3[2]*$prioritas[2])+($C_4[2]*$prioritas[3])+($C_5[2]*$prioritas[4])+($C_6[2]*$prioritas[5])+($C_7[2]*$prioritas[6]);
                                            // $matrik4 = ($C_1[3]*$prioritas[0])+($C_2[3]*$prioritas[1])+($C_3[3]*$prioritas[2])+($C_4[3]*$prioritas[3])+($C_5[3]*$prioritas[4])+($C_6[3]*$prioritas[5])+($C_7[3]*$prioritas[6]);
                                            // $matrik5 = ($C_1[4]*$prioritas[0])+($C_2[4]*$prioritas[1])+($C_3[4]*$prioritas[2])+($C_4[4]*$prioritas[3])+($C_5[4]*$prioritas[4])+($C_6[4]*$prioritas[5])+($C_7[4]*$prioritas[6]);
                                            // $matrik6 = ($C_1[5]*$prioritas[0])+($C_2[5]*$prioritas[1])+($C_3[5]*$prioritas[2])+($C_4[5]*$prioritas[3])+($C_5[5]*$prioritas[4])+($C_6[5]*$prioritas[5])+($C_7[5]*$prioritas[6]);
                                            // $matrik7 = ($C_1[6]*$prioritas[0])+($C_2[6]*$prioritas[1])+($C_3[6]*$prioritas[2])+($C_4[6]*$prioritas[3])+($C_5[6]*$prioritas[4])+($C_6[6]*$prioritas[5])+($C_7[6]*$prioritas[6]);

                                      ?>
                                      <?php }
                                      $matrik = [];
                                        
                                          $matrik[0] = ($C_1[0]*$prioritas[0])+($C_2[0]*$prioritas[1])+($C_3[0]*$prioritas[2])+($C_4[0]*$prioritas[3])+($C_5[0]*$prioritas[4])+($C_6[0]*$prioritas[5])+($C_7[0]*$prioritas[6]);

                                          $matrik[1]= ($C_1[1]*$prioritas[0])+($C_2[1]*$prioritas[1])+($C_3[1]*$prioritas[2])+($C_4[1]*$prioritas[3])+($C_5[1]*$prioritas[4])+($C_6[1]*$prioritas[5])+($C_7[1]*$prioritas[6]);

                                          $matrik[2] = ($C_1[2]*$prioritas[0])+($C_2[2]*$prioritas[1])+($C_3[2]*$prioritas[2])+($C_4[2]*$prioritas[3])+($C_5[2]*$prioritas[4])+($C_6[2]*$prioritas[5])+($C_7[2]*$prioritas[6]);

                                          $matrik[3] = ($C_1[3]*$prioritas[0])+($C_2[3]*$prioritas[1])+($C_3[3]*$prioritas[2])+($C_4[3]*$prioritas[3])+($C_5[3]*$prioritas[4])+($C_6[3]*$prioritas[5])+($C_7[3]*$prioritas[6]);

                                          $matrik[4] = ($C_1[4]*$prioritas[0])+($C_2[4]*$prioritas[1])+($C_3[4]*$prioritas[2])+($C_4[4]*$prioritas[3])+($C_5[4]*$prioritas[4])+($C_6[4]*$prioritas[5])+($C_7[4]*$prioritas[6]);

                                          $matrik[5] = ($C_1[5]*$prioritas[0])+($C_2[5]*$prioritas[1])+($C_3[5]*$prioritas[2])+($C_4[5]*$prioritas[3])+($C_5[5]*$prioritas[4])+($C_6[5]*$prioritas[5])+($C_7[5]*$prioritas[6]);

                                          $matrik[6] = ($C_1[6]*$prioritas[0])+($C_2[6]*$prioritas[1])+($C_3[6]*$prioritas[2])+($C_4[6]*$prioritas[3])+($C_5[6]*$prioritas[4])+($C_6[6]*$prioritas[5])+($C_7[6]*$prioritas[6]);
                                    
                                        ?>
                                        <tr>
                                              <td align='center'><?php echo round($matrik[0],4);?></td>
                                        </tr>
                                        <tr>
                                              <td align='center'><?php echo round($matrik[1],4);?></td>
                                        </tr>
                                        <tr>
                                              <td align='center'><?php echo round($matrik[2],4);?></td>
                                        </tr>
                                        <tr>
                                              <td align='center'><?php echo round($matrik[3],4);?></td>
                                        </tr>
                                        <tr>
                                              <td align='center'><?php echo round($matrik[4],4);?></td>
                                        </tr>
                                        <tr>
                                              <td align='center'><?php echo round($matrik[5],4);?></td>
                                        </tr>
                                        <tr>
                                              <td align='center'><?php echo round($matrik[6],4);?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                      <!-- End  Basic Table  -->
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                     <!--    Hover Rows  -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Hasil Akhir
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <tr>
                                        <td><p><b>Principle Eigen value(max)</b></p></td><td><p><b style="float:right;">
                                        <?php $jumlah= (($matrik[0])+($matrik[1])+($matrik[2])+($matrik[3])+($matrik[4])+($matrik[5])+($matrik[6]));
                                            
                                        echo $eigen= $jumlah/7 ; ?></b></p></td>
                                    </tr>
                                    <tr>
                                        <td><p><b>Consistency index(CI)</b></p></td><td><p><b style="float:right;">
                                        <?php $ci= $eigen-7/6;
                                        $ci = number_format($ci, 4, '.','');
                                            echo $ci; ?></b></p></td>
                                    </tr>
                                    <tr>
                                        <td><p><b>Consistency Ratio(CR)</b></p></td><td><p><b style="float:right;">
                                        <?php $cr=$ci/1.41;
                                            $cr = number_format($cr, 4, '.', '');
                                            echo $cr; ?></b></p>	</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- End  Hover Rows  -->
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
