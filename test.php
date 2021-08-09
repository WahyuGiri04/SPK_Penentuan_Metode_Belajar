<?php 
include "koneksi.php";
function cek_c1($c1){
    $array_c1 = ['1','2'];
    $hasil_c1 = 0 ;
    $jumlah_c1 = count($array_c1);
    for($i = 0; $i<$jumlah_c1;$i++){
        if(stristr($c1,$array_c1[$i])){
            $hasil_c1 = 1;
        }
    }
    return $hasil_c1;
}

$sql_alternatif = $koneksi->query("SELECT * FROM tab_alternatif");
while($data_alternatif = $sql_alternatif->fetch_assoc()){
    $data_c1 = $data_alternatif['c1'];

    if(cek_c1($data_c1)){
        echo $nilai_c1 = "Data Sama";
        echo "<br>";
    }else{
        echo $nilai_c1 = "Niilai Beda";
        echo "<br>";
    }
}
?>