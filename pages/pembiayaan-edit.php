<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tambah Data Anggota</title>
    <link rel="stylesheet" href="../assets/style.css" />
    <link href="../assets/bootstrap-5.2.3-dist/css/bootstrap.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <header class="mb-3  p-1 mb-2 glass-effect d-flex justify-content-between align-items-center">
        <span class="img-wrapper">
            <img class="text-left mx-5" src="../images/logo.png" alt="" width="50px">
        </span>
        <h1 class="m-0">Pembiayaan</h1>

        <div class="user mx-5 text-center d-flex align-items-center">
            <span class="text-sm">Hi,</span>
            <span class="me-2">Admin</span>

            <a href="proses/logout.php" class=" text-center d-flex align-items-center">
                <ion-icon name="log-out-outline" class="ms-2 icon-large"></ion-icon>
                Keluar
            </a>
        </div>
    </header>


    <div class="container-fluid">
        <div class="row">
            <div class="glass-effect col-2 ">
                <ul class="nav flex-column">
                    <li class="nav-item ">
                        <span class=" nav text-white  bg-dark p-2" href="#">Menu Admin</span>
                    </li>
                    <li class="nav-item">
                        <span class="fa-solid fa-magnifying-glass"></span>
                        <a class=" nav-link text-white " href="index.php?p=beranda">
                            <ion-icon name="home-outline"></ion-icon>
                            Beranda
                        </a>
                    </li>
                    <li class="nav-item">
                        <span class="nav text-white  bg-dark p-2">Kelola Data Buku</span>
                    </li>
                    <li class="nav-item">
                        <span class="fa-solid fa-magnifying-glass"></span>
                        <a class=" nav-link text-white " href="index.php?p=pembiayaan">
                            <ion-icon name="home-outline"></ion-icon>
                            Sewa Buku
                        </a>
                    </li>

                </ul>
            </div>
            <div class="form glass-effect col-9 mx-4">

                <?php
  $id_pembiayaan = $_GET['id_pembiayaan'];
  include('../koneksi.php');
  $query = mysqli_query($db,"select * from tb_sewa where id_pembiayaan = '$id_pembiayaan'");
  $row = mysqli_fetch_assoc($query);
  ?>

                <form class="mt-5" action="../proses/pembiayaan-edit-proses.php?id_pembiayaan=<?= $id_pembiayaan ?>"
                    method="POST">
                    <h3>Edit Data Sewa </h3>

                    <div class="form-group d-none">
                        <label for="exampleFormControlInput1">*Nama Pembiayaan</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1"
                            placeholder="Willy Agustri Djabar" name="id_pembiayaan"
                            value="<?php echo $row['id_pembiayaan']?>  " />
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlInput1">*Nama Pembiayaan</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1"
                            placeholder="Willy Agustri Djabar" name="nama_pembiayaan"
                            value="<?php echo $row['nama_pembiayaan']?>  " />
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">*Jumlah Bulan</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1"
                            placeholder="Willy Agustri Djabar" name="jumlah_bulan"
                            value="<?php echo $row['jumlah_bulan']?>  " />
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">*Total Biaya</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1"
                            placeholder="Willy Agustri Djabar" name="total_biaya"
                            value="<?php echo $row['total_biaya']?>  " />
                    </div>


                    <div class="mt-4">
                        <button class="btn btn-sm btn-primary mx-2" name="submit">Edit Data Sewa</button>
                        <a href="../index.php?p=pembiayaan" class=" btn btn-sm btn-danger ">Kembali</a>
                    </div>

                </form>

            </div>
        </div>
    </div>
</body>
<footer class=" bg-dark text-center text-white text-lg-start mt-2">
    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
        Willy Agustri Djabar
    </div>
    <!-- Copyright -->
</footer>
</html>