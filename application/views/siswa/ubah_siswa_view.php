<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    <?= $title; ?>
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?= $siswa['id']; ?>">
                        <div class="form-group">
                            <label for="nis">Nis</label>
                            <input type="text" class="form-control" name="nis" id="nis" value="<?= $siswa['nis']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="nama">Siswa</label>
                            <input type="text" class="form-control" name="nama" id="nama" value="<?= $siswa['nama']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="tgl_lahir">Tanggal Lahir</label>
                            <input type="date" class="form-control" name="tgl_lahir" id="tgl_lahir" value="<?= $siswa['tgl_lahir']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="jenis_kelamin">jenis_kelamin</label>
                            <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                                <?php foreach ($jenis_kelamin as $j) : ?>
                                    <?php if ($j == $siswa['jenis_kelamin']) : ?>
                                        <option value="<?= $j; ?>" selected><?= $j; ?></option>
                                    <?php else : ?>
                                        <option value="<?= $j; ?>"><?= $j; ?></option>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="telp">No. Telp</label>
                            <input type="text" class="form-control" name="telp" id="telp" value="<?= $siswa['telp']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" class="form-control" name="alamat" id="alamat" value="<?= $siswa['alamat']; ?>">
                        </div>

                        <button type="submit" name="ubah" class="btn btn-primary float-right">Ubah Data</button>
                    </form>
                </div>
            </div>


        </div>
    </div>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->