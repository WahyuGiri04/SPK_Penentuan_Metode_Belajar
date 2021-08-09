<?php

include ("koneksi.php");

$id_mapel = $_GET['id_mapel'];

$sql2   = "DELETE FROM tab_perangkingan WHERE id_mapel = '$id_mapel' ";
$hapus2 = $koneksi->query($sql2);

$sql3 = "DELETE FROM tab_data WHERE id_mapel = '$id_mapel'";
$hapus3 = $koneksi->query($sql3);

$sql4 = "DELETE FROM tab_data_konvert WHERE id_mapel = '$id_mapel'";
$hapus4 = $koneksi->query($sql4);

$hapus1 = $koneksi->query("DELETE FROM tab_mata_pelajaran WHERE id_mapel = '$id_mapel'");

if ($hapus1=== TRUE) {
  echo "<script>alert('Hapus ID = ".$id_mapel." Berhasil') </script>";
  echo "<script>window.location.href = \"daftar_hasil_analisis.php\" </script>";
} else {
  echo "<script>alert('Data Gagal Di HAPUS !!!') </script>";
  echo "<script>window.location.href = \"daftar_hasil_analisis.php\" </script>";
}
?>
