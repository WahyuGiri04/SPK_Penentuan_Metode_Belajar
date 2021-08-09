
<?php
include "koneksi.php";

$id_mapel = $_POST['id_mapel'];
$array_c1 = $_POST['c1'];
$array_c2 = $_POST['c2'];
$array_c3 = $_POST['c3'];
$array_c4 = $_POST['c4'];
$array_c5 = $_POST['c5'];
$array_c6 = $_POST['c6'];
$array_c7 = $_POST['c7'];

$nilai_c1 = implode($array_c1," . ");
$nilai_c2 = implode($array_c2," . ");
$nilai_c3 = $array_c3;
$nilai_c4 = implode($array_c4," . ");
$nilai_c5 = implode($array_c5," . ");
$nilai_c6 = implode($array_c6," . ");
$nilai_c7 = $array_c7;

$tambah_data = $koneksi->query("INSERT INTO tab_data SET id_mapel = '$id_mapel', c1 = '$nilai_c1',c2 = '$nilai_c2',c3 = '$nilai_c3',c4 = '$nilai_c4',c5 = '$nilai_c5',c6 = '$nilai_c6',c7 = '$nilai_c7'");

$n = 0;
$sql_alternatif = $koneksi->query("SELECT * FROM tab_alternatif");
while($data_alternatif = $sql_alternatif->fetch_assoc()){
    $data_c1 = $data_alternatif['c1'];
    $data_c2 = $data_alternatif['c2'];
    $data_c3 = $data_alternatif['c3'];
    $data_c4 = $data_alternatif['c4'];
    $data_c5 = $data_alternatif['c5'];
    $data_c6 = $data_alternatif['c6'];
    $data_c7 = $data_alternatif['c7'];
    $id_alternatif = $data_alternatif['id_alternatif'];
    $nama = $data_alternatif['nama_alternatif'];

    //nilai c1
    $array_c1 = $_POST['c1'];
    $hasil_c1 = array() ;
    $jumlah_c1 = count($array_c1);
    for($i = 0; $i<$jumlah_c1;$i++){
        $hasil_c1[$n][$i] = preg_match("/$array_c1[$i]/",$data_c1);
    }
    $has_c1 = array_sum($hasil_c1[$n]);
        if($has_c1 == 0){
            $has_akhir_c1 = 1;
        }else{
            $has_akhir_c1 = $has_c1;
        }

        //nilai c2
    $array_c2 = $_POST['c2'];
    $hasil_c2 = array() ;
    $jumlah_c2 = count($array_c2);
    for($i = 0; $i<$jumlah_c2;$i++){
        $hasil_c2[$n][$i] = preg_match("/$array_c2[$i]/",$data_c2);
    }
    $has_c2 = array_sum($hasil_c2[$n]);
        if($has_c2 == 0){
            $has_akhir_c2 = 1;
        }else{
            $has_akhir_c2 = $has_c2;
        }


    //nilai c3
        if(strtolower($array_c3) == strtolower($data_c3)){
            $sql_point_c3 = $koneksi->query("SELECT * FROM tab_penilaian WHERE range_nilai = '$array_c3'");
            $data_point_c3 = $sql_point_c3->fetch_assoc();
            $has_akhir_c3 = $data_point_c3['nilai'];
        }else{
            $has_akhir_c3 = 1;
        }
    
    //nilai c4
    $array_c4 = $_POST['c4'];
    $hasil_c4 = array() ;
    $jumlah_c4 = count($array_c4);
    for($i = 0; $i<$jumlah_c4;$i++){
        $hasil_c4[$n][$i] = preg_match("/$array_c4[$i]/",$data_c4);
    }
    $has_c4 = array_sum($hasil_c4[$n]);
        if($has_c4 == 0){
            $has_akhir_c4 = 1;
        }else{
            $has_akhir_c4 = $has_c4;
        }

    //nilai c5
    $array_c5 = $_POST['c5'];
    $hasil_c5 = array() ;
    $jumlah_c5 = count($array_c5);
    for($i = 0; $i<$jumlah_c5;$i++){
        $hasil_c5[$n][$i] = preg_match("/$array_c5[$i]/",$data_c5);
    }
    $has_c5 = array_sum($hasil_c5[$n]);
        if($has_c5 == 0){
            $has_akhir_c5 = 1;
        }else{
            $has_akhir_c5 = $has_c5;
        }

    //nilai c6
    $array_c6 = $_POST['c6'];
    $hasil_c6 = array() ;
    $jumlah_c6 = count($array_c6);
    for($i = 0; $i<$jumlah_c6;$i++){
        $hasil_c6[$n][$i] = preg_match("/$array_c6[$i]/",$data_c6);
    }
    $has_c6 = array_sum($hasil_c6[$n]);
        if($has_c6 == 0){
            $has_akhir_c6 = 1;
        }elseif($has_c6 >= 5){
            $has_akhir_c6 = 1;
        }elseif($has_c6 == 4){
            $has_akhir_c6 = 2 ;
        }elseif($has_c6 == 3){
            $has_akhir_c6 = 3 ;
        }elseif($has_c6 == 2){
            $has_akhir_c6 = 4 ;
        }elseif($has_c6 == 1){
            $has_akhir_c6 = 5 ;
        }
    
    //nilai c7
    if(strtolower($array_c7) == strtolower($data_c7)){
            $sql_point_c7 = $koneksi->query("SELECT * FROM tab_penilaian WHERE range_nilai = '$array_c7'");
            $data_point_c7 = $sql_point_c7->fetch_assoc();
            $has_akhir_c7 = $data_point_c7['nilai'];
            
        }else{
            $has_akhir_c7 = 1;
        }
        echo $has_akhir_c7."<br>";

    $n++;

    $tambah_data_konvert = $koneksi->query("INSERT INTO tab_data_konvert SET id_alternatif = '$id_alternatif',id_mapel = '$id_mapel', c1 = '$has_akhir_c1',c2 = '$has_akhir_c2',c3 = '$has_akhir_c3',c4 = '$has_akhir_c4',c5 = '$has_akhir_c5',c6 = '$has_akhir_c6',c7 = '$has_akhir_c7'");
    $tambah_rangking = $koneksi->query("INSERT INTO tab_perangkingan SET id_alternatif = '$id_alternatif' ,id_mapel = '$id_mapel', nilai_preferensi = '0'");


}

if(($tambah_data===TRUE)&&($tambah_data_konvert === TRUE)){
    echo "<script>alert('Input Data Berhasil') </script>"; 
    echo "<script>window.location.href = 'hasil_analisis.php?id_mapel=$id_mapel' </script>";
}

?>