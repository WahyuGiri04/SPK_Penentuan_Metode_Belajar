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

function cek_c1($c1){
    $array_c1 = $_POST['c1'];
    $hasil_c1 = 0 ;
    $jumlah_c1 = count($array_c1);
    for($i = 0; $i<$jumlah_c1;$i++){
        if(stristr($c1,$array_c1[$i])){
            $hasil_c1 = 1;
        }
    }
    return $hasil_c1;
}function cek_c2($c2){
    $array_c2 = $_POST['c2'];
    $hasil_c2 = 0 ;
    $jumlah_c2 = count($array_c2);
    for($i = 0; $i<$jumlah_c2;$i++){
        if(stristr($c2,$array_c2[$i])){
            $hasil_c2 = 1;
        }
    }
    return $hasil_c2;
}function cek_c4($c4){
    $array_c4 = $_POST['c4'];
    $hasil_c4 = 0 ;
    $jumlah_c4 = count($array_c4);
    for($i = 0; $i<$jumlah_c4;$i++){
        if(stristr($c4,$array_c4[$i])){
            $hasil_c4 = 1;
        }
    }
    return $hasil_c4;
}function cek_c5($c5){
    $array_c5 = $_POST['c5'];
    $array_c5 = $_POST['c5'];
    $hasil_c5 = 0 ;
    $jumlah_c5 = count($array_c5);
    for($i = 0; $i<$jumlah_c5;$i++){
        if(stristr($c5,$array_c5[$i])){
            $hasil_c5 = 1;
        }
    }
    return $hasil_c5;
}function cek_c6($c6){
    $array_c6 = $_POST['c6'];
    $hasil_c6 = 0 ;
    $jumlah_c6 = count($array_c6);
    for($i = 0; $i<$jumlah_c6;$i++){
        if(stristr($c6,$array_c6[$i])){
            $hasil_c6 = 1;
        }
    }
    return $hasil_c6;
}
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

    if(cek_c1($data_c1)){
        $nilai_c1_konvert = 5;
    }else{
        $nilai_c1_konvert = 1;
    }
    if(cek_c2($data_c2)){
        $nilai_c2_konvert = 5;
    }else{
        $nilai_c2_konvert = 1;
    }
    if($data_c3==$nilai_c3){
        $nilai_c3_konvert = 5;
    }else{
        $nilai_c3_konvert = 1;
    }
    if(cek_c4($data_c4)){
        $nilai_c4_konvert = 5;
    }else{
        $nilai_c4_konvert = 1;
    }
    if(cek_c5($data_c5)){
        $nilai_c5_konvert = 5;
    }else{
        $nilai_c5_konvert = 1;
    }
    if(cek_c6($data_c6)){
        $nilai_c6_konvert = 5;
    }else{
        $nilai_c6_konvert = 1;
    }
    if($data_c7==$nilai_c7){
        $nilai_c7_konvert = 5;
    }else{
        $nilai_c7_konvert = 1;
    }


    $tambah_data_konvert = $koneksi->query("INSERT INTO tab_data_konvert SET id_alternatif = '$id_alternatif',id_mapel = '$id_mapel', c1 = '$nilai_c1_konvert',c2 = '$nilai_c2_konvert',c3 = '$nilai_c3_konvert',c4 = '$nilai_c4_konvert',c5 = '$nilai_c5_konvert',c6 = '$nilai_c6_konvert',c7 = '$nilai_c7_konvert'");
    $tambah_rangking = $koneksi->query("INSERT INTO tab_perangkingan SET id_alternatif = '$id_alternatif' ,id_mapel = '$id_mapel', nilai_preferensi = '0'");


}

?>