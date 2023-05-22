<?php

include('../koneksi.php');

if (isset($_POST['submit'])) {
    $id_pembiayaan = $_POST['id_pembiayaan'];
    $nama_pembiayaan = $_POST['nama_pembiayaan'];
    $jumlah_bulan = $_POST['jumlah_bulan'];
    $total_biaya = $_POST['total_biaya'];

    $biaya_perbulan = ($total_biaya / $jumlah_bulan) + 25000;

    $query = "UPDATE tb_sewa SET nama_pembiayaan='$nama_pembiayaan', jumlah_bulan='$jumlah_bulan', total_biaya='$total_biaya', biaya_perbulan='$biaya_perbulan' WHERE id_pembiayaan='$id_pembiayaan'";

    if (mysqli_query($db, $query)) {
        echo "<script>alert('Data berhasil Diupdate'); location.replace('../index.php?p=pembiayaan')</script>";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($db);
    }
}

?>