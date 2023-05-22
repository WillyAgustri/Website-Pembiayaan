<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>



    <!-- Cek Session -->
    <?php
session_start();

if (!isset($_SESSION['id_admin'])) {
    echo "<script>alert('Anda Perlu Login Terlebih Dahulu');</script>";
    echo "<script>window.location.replace('pages/login.php');</script>";
} 

?>

    <!-- End Session -->

    <!-- Link -->



    <link rel="stylesheet" href="./assets/style.css">
    <link rel="stylesheet" href="./assets/bootstrap-5.2.3-dist/css/bootstrap.min.css">

    <!-- Link -->
</head>

<!-- Header nav-bar -->

<header class="mb-3  p-1 mb-2 glass-effect d-flex justify-content-between align-items-center">
    <span class="img-wrapper">
        <img class="text-left mx-5" src="images/logo.png" alt="" width="50px">
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

<!-- END Header nav-bar -->



<body>

    <!-- Navbar Side -->

    <div class="container-fluid mb-3">
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
                        <span class="nav text-white  bg-dark p-2">Kelola Peminjaman</span>
                    </li>
                    <li class="nav-item">
                        <span class="fa-solid fa-magnifying-glass"></span>
                        <a class=" nav-link text-white " href="index.php?p=pembiayaan">
                            <ion-icon name="home-outline"></ion-icon>
                            Peminjaman
                        </a>
                    </li>

                </ul>
            </div>


            <!-- END navbar side -->

            <!-- Content -->

            <?php
    $pages_dir = 'pages';
    if(!empty($_GET['p'])){
        $pages=scandir($pages_dir,0);
        unset($pages[0],$pages[1]);
        $p=$_GET['p'];
        if(in_array($p.'.php',$pages)){
            include($pages_dir.'/'.$p.'.php');
        }
        
        else{
          echo' <div class="form glass-effect col-9 mx-4 d-flex justify-content-center align-items-center">
          <form class="d-flex align-self-center" action="#" method="POST">
              <h3>Halaman Tidak Ditemukan!</h3>
  
  
          </form>
      </div>';
        }
   
    }
    else{
        include($pages_dir.'/beranda.php');
    }
?>

            <!-- End Content -->




</body>

<!-- Footer -->

<footer class=" bg-white text-center text-white text-lg-start mt-2">
    <!-- Copyright -->
    <div class="text-center p-3 text-black ">
        Willy Agustri Djabar
    </div>
    <!-- End Copyright -->


</footer>



<!-- End Footer -->


</html>