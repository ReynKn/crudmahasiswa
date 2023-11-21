<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
            <div class="card-body">
                <h2 class="card-title"><?= $calpres['nama']; ?></h2>
                <h6 class="card-subtitle mb-2 text-muted"><?= $calpres['nik']; ?></h6>
                <div class="row">
                    <div class="col-md-4">Asal</div>
                    <div class="col-md-2">:</div>
                    <div class="col-md-6"><?= $calpres['asal']; ?></div>
                </div>
                <div class="row">
                    <div class="col-md-4">Partai Pendukung</div>
                    <div class="col-md-2">:</div>
                    <div class="col-md-6"><?= $calpres['partai_pendukung']; ?></div>
                </div>
                <div class="row">
                    <div class="col-md-4">Riwayat Pekerjaan</div>
                    <div class="col-md-2">:</div>
                    <div class="col-md-6"><?= $calpres['riwayat_pekerjaan']; ?></div>
                </div>
                <div class="row">
                    <div class="col-md-4">Umur</div>
                    <div class="col-md-2">:</div>
                    <div class="col-md-6"><?= $calpres['umur']; ?></div>
                </div>
            </div>
            <div class="card-footer justify-content-center">
                <a href="<?= base_url('index.php/Calpres/calpres') ?>" class="btn btn-danger">Tutup</a>
            </div>
        </div>
    </div>
</div>