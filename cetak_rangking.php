<?php include "koneksi.php" ?>

<table style="width: 100%;">
    <tr>
        <td align="center"><font size="4"><b>DATA HASIL PERANGKINGAN</b></td>
    <tr>
</table>
<br>
    <table style="width: 100%;" border="1" cellspacing="0">
    <thead >
            <tr>
                    <th>No</th>
                    <th>Nama Alternatif</th>
                    <th>Nilai Preferensi</th>
                </tr>
            </thead>
            <tbody>
            <?php
            $id_mapel = $_GET['id_mapel'];
            $no = 1 ;
            $sql = $koneksi->query("SELECT * FROM tab_perangkingan left join tab_alternatif on tab_alternatif.id_alternatif=tab_perangkingan.id_alternatif where id_mapel = '$id_mapel' ORDER BY nilai_preferensi DESC");
            while ($row = $sql->fetch_assoc()) {
            ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $row['nama_alternatif'] ?></td>
                <td><?php echo round(($row['nilai_preferensi'] * 100),4) ?> %</td>
            </tr>
        <?php } ?>
        </tbody>
    </table>

<script type="text/javascript"> 
  window.addEventListener("load", window.print());
</script>