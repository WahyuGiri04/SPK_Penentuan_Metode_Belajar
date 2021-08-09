<?php
include "koneksi.php";

$nama_alternatif = $_POST['nama_alternatif'];
$nilai_c1 = implode($_POST['c1']," . ");
$nilai_c2 = implode($_POST['c2']," . ");
$nilai_c3 = $_POST['c3'];
$nilai_c4 = implode($_POST['c4']," . ");
$nilai_c5 = implode($_POST['c5']," . ");
$nilai_c6 = implode($_POST['c6']," . ");
$nilai_c7 = $_POST['c7'];


$tambah_data = $koneksi->query("INSERT INTO tab_alternatif SET nama_alternatif = '$nama_alternatif', c1 = '$nilai_c1',c2 = '$nilai_c2',c3 = '$nilai_c3',c4 = '$nilai_c4',c5 = '$nilai_c5',c6 = '$nilai_c6',c7 = '$nilai_c7'");

if($tambah_data === TRUE){
  echo "<script>alert('Input Data Berhasil') </script>"; 
    echo "<script>window.location.href = 'alternatif.php' </script>";
}
?>