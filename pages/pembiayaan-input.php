<div class="form glass-effect col-9 mx-4">
    <form class="mt-5" action="proses/pembiayaan-input-proses.php" method="POST">
        <h3>Tambah Data Sewa </h3>

        <div class="form-group">
            <label for="exampleFormControlInput1">*Nama Pembiayaan</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="nama_pembiayaan" />
        </div>

        <div class="form-group">
            <label for="exampleFormControlInput1">*Jumlah Bulan</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="jumlah_bulan" />
        </div>

        <div class="form-group">
            <label for="exampleFormControlInput1">*Total Biaya</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="total_biaya" />
        </div>

        <div class="mt-4">
            <button class="btn btn-sm btn-primary mx-2" name="submit">Tambah Data Sewa</button>
            <a class="btn btn-sm btn-danger" href="../index.php?p=anggota">Kembali</a>
        </div>

    </form>
</div>