<?php
include_once "koneksi.php";

$nama_mapel = $_POST['nama_mapel'];
$nama_sub_mapel = $_POST['nama_sub_mapel'];

$tambah_mapel = $koneksi->query("INSERT INTO tab_mata_pelajaran set nama_mapel = '$nama_mapel',sub_mapel ='$nama_sub_mapel'");
$sql_id_mapel = $koneksi->query("SELECT * FROM tab_mata_pelajaran ORDER BY id_mapel DESC LIMIT 1");
$data_id_mapel = $sql_id_mapel->fetch_assoc();
$id_mapel = $data_id_mapel['id_mapel'];

if($tambah_mapel === TRUE){
    echo "<script>alert('Input Data Berhasil') </script>"; 
    echo "<script>window.location.href = 'proses_pengisian_nilai.php?id_mapel=$id_mapel' </script>";
}
?>