<?php
    include('../koneksi.php');

    $nama_pembiayaan = $_POST['nama_pembiayaan'];
    $jumlah_bulan = $_POST['jumlah_bulan'];
    $total_biaya = $_POST['total_biaya'];
    $biaya_perbulan = ($total_biaya / $jumlah_bulan) + 25000;

    if(isset($_POST['submit'])){
        $query = "INSERT INTO tb_sewa (nama_pembiayaan, jumlah_bulan, total_biaya, biaya_perbulan) VALUES ('$nama_pembiayaan', '$jumlah_bulan', '$total_biaya', '$biaya_perbulan')";
        
        if (mysqli_query($db, $query)) {
            $last_id = mysqli_insert_id($db); // Mendapatkan ID terakhir yang di-generate secara otomatis
            echo "<script>alert('Data berhasil Ditambah. ID Pembiayaan: $last_id'); location.replace('../index.php?p=pembiayaan')</script>";
        } else {
            echo "Error: " . $query . "<br>" . mysqli_error($db);
        }
    }
?>