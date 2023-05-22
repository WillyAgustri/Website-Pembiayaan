<?php
include('../koneksi.php');
$id_pembiayaan = $_GET['id_pembiayaan'];

$query =  "DELETE FROM tb_sewa WHERE id_pembiayaan = '$id_pembiayaan'";

if (mysqli_query($db, $query)) {
    echo "<script>alert('Data berhasil Dihapus'); location.replace('../../index.php?p=sewa')</script>";
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($db);
}
?>