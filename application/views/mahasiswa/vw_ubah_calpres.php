<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">
        <?php echo $judul; ?>
    </h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header justify-content-center">
                    Form Edit Data Calon Presiden
                </div>

                <div class="card-body">
                    <form action="<?= base_url("Calpres/update"); ?>" method="POST">
                    <input type="hidden" name="id" value="<? $calpres['id']; ?>">
                        <div class="form-group">
                            <label for="calpres">NIK</label>
                            <input type="text" name="nik" value="<?= $calpres['nik']; ?>" class="form-control" id="nik" placeholder="NIK">
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama Lengkap</label>
                            <input type="text" name="nama" value="<?= $calpres['nama']; ?>" class="form-control" id="ruangan" placeholder="Ruangan">
                        </div>
                        <div class="form-group">
                            <label for="asal">Asal</label>
                            <input type="text" name="asal" value="<?= $calpres['asal']; ?>" class="form-control" id="asal" placeholder="Asal">
                        </div>
                        <div class="form-group">
                            <label for="partai_pendukung">Partai Pendukung</label>
                            <input type="text" name="partai_pendukung" value="<?= $calpres['partai_pendukung']; ?>" class="form-control" id="partai_pendukung"
                                placeholder="Partai Pendukung">
                        </div>
                        <div class="form-group">
                            <label for="riwayat_pekerjaan">Riwayat Pekerjaan</label>
                            <input type="text" name="riwayat_pekerjaan" value="<?= $calpres['riwayat_pekerjaan']; ?>" class="form-control" id="riwayat_pekerjaan"
                                placeholder="Riwayat Pekerjaan">
                        </div>
                        <div class="form-group">
                            <label for="umur">Umur</label>
                            <input type="text" name="umur" value="<?= $calpres['umur']; ?>" class="form-control" id="umur"
                                placeholder="Umur">
                        </div>
                        <a href="<?= base_url('index.php/Calpres/calpres') ?>" class="btn btn-danger">Tutup</a>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Edit Calpres</button>
                    </form>
                </div>
            </div>
        </div>
    </div>