<div class="form glass-effect col-9 mx-4   ">
    <div class="container mt-5">
        <h2>Data Buku</h2>
        <div class="d-flex mb-3">
            <a class="btn btn-sm btn-primary mx-2" href="index.php?p=pembiayaan-input">Tambah Data</a>
            <a class="btn btn-sm btn-success mx-2" href="proses/export-xls.php">Export to XLS</a>
            <a class="btn btn-sm btn-success mx-2" href="proses/export-pdf.php">Export to PDF</a>
            <button class="btn btn-sm btn-info" onclick="window.print()">Print</button>
        </div>

        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">ID Pembiayaan</th>
                        <th scope="col">Nama Pembiayaan</th>
                        <th scope="col">Jumlah Bulan</th>
                        <th scope="col">Total Biaya</th>
                        <th scope="col">Biaya Perbulan</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Menampilkan data anggota dari database dbpus -->

                    <?php
                include('koneksi.php');
                $query ="SELECT * FROM tb_sewa ORDER BY id_pembiayaan DESC";
                $dat = mysqli_query($db, $query);

                $jumlah_data_per_halaman = 5; // Jumlah data yang ditampilkan per halaman
                $jumlah_data = mysqli_num_rows($dat); // Total jumlah data
                $jumlah_halaman = ceil($jumlah_data / $jumlah_data_per_halaman); // Total jumlah halaman

                if (!isset($_GET['halaman'])) {
                    $halaman_aktif = 1;
                } else {
                    $halaman_aktif = $_GET['halaman'];
                }

                $batas_data_awal = ($halaman_aktif - 1) * $jumlah_data_per_halaman;

                $query = "SELECT * FROM tb_sewa ORDER BY id_pembiayaan DESC LIMIT $batas_data_awal, $jumlah_data_per_halaman";
                $dat = mysqli_query($db, $query);

                $nomor = $batas_data_awal + 1;

                while ($result = mysqli_fetch_array($dat)) {
            ?>

                    <tr>
                        <td><?php echo $nomor++; ?></td>
                        <td><?php echo $result['id_pembiayaan']; ?></td>
                        <td><?php echo $result['nama_pembiayaan']; ?></td>
                        <td><?php echo $result['jumlah_bulan']; ?></td>
                        <td>Rp. <?php echo number_format($result['total_biaya'], 0, ',', '.'); ?></td>
                        <td>Rp. <?php echo number_format($result['biaya_perbulan'], 0, ',', '.'); ?></td>

                        <td>
                            <a href="pages/pembiayaan-edit.php?id_pembiayaan=<?= $result['id_pembiayaan'] ?>"
                                class="btn btn-sm btn-success mb-1">Edit</a>
                            <a href="proses/pembiayaan-hapus-proses.php/?id_pembiayaan=<?= $result['id_pembiayaan'] ?>"
                                class="btn btn-sm btn-danger  mb-1">Hapus</a>
                        </td>
                    </tr>

                    <?php
                }
            ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Menampilkan navigasi halaman -->
    <nav aria-label="Navigasi Halaman">
        <ul class="pagination">
            <?php for ($halaman = 1; $halaman <= $jumlah_halaman; $halaman++) : ?>
            <li class="page-item <?php if ($halaman == $halaman_aktif) echo 'active'; ?>">
                <a class="page-link"
                    href="index.php?p=data-buku&halaman=<?php echo $halaman; ?>&p=<?php echo $_GET['p']; ?>">
                    <?php echo $halaman; ?>
                </a>
            </li>
            <?php endfor; ?>
        </ul>
    </nav>

</div>

</div>
</div>
</div>
</body>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
</script>
</html>