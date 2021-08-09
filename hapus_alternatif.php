<?php
include_once "koneksi.php";

$id = $_GET['id'];
$id_mapel = $_GET['id_mapel'];

$hapus = $koneksi->query("DELETE FROM tab_data where id = '$id'");
$hapus1 = $koneksi->query("DELETE FROM tab_data_konvert where id = '$id'");
$hapus2 = $koneksi->query("DELETE FROM tab_perangkingan where id_rangking = '$id'");

if (($hapus === TRUE)&&($hapus1 === TRUE)&&($hapus2 === TRUE)) {
    echo "<script>alert('Hapus ID = ".$id." Berhasil Di HAPUSSS !!!!') </script>";
    echo "<script>window.location.href = \"alternatif_kasus.php?id_mapel=$id_mapel\" </script>";
  } else {
    echo "Maaf Tidak Dapat Menghapus !";
  }
?>