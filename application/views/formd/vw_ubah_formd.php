<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">
        <?php echo $judul; ?>
    </h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header justify-content-center">
                    Form Edit Data
                </div>
                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?= $formd['id']; ?>">
                        <div class="form-group">
                        <label for="nama_lengkap">Nama Lengkap</label>
                            <input name="nama_lengkap" type="text" value="<?= $formd['nama_lengkap']; ?>"
                                class="form-control" id="nama_lengkap" placeholder="Nama Lengkap">
                            <?= form_error('nama_lengkap', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="tanggal">Tanggal</label>
                            <input name="tanggal" type="date" value="<?= $formd['tanggal']; ?>" class="form-control"
                                id="tanggal">
                            <?= form_error('tanggal', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="jenis_kelamin">Jenis Kelamin</label>
                            <input type="text" name="jenis_kelamin" value="<?= $formd['jenis_kelamin']; ?>" class="form-control" 
                            id="jenis_kelamin" placeholder="Jenis Kelamin">
                            <?= form_error('jenis_kelamin', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" name="email" value="<?= $formd['email']; ?>" class="form-control"
                                id="email" placeholder="Email">
                            <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="username">Nama Peliharaan</label>
                            <input type="text" name="username" value="<?= $formd['username']; ?>"
                                class="form-control" id="output_lulusan" placeholder="Nama Peliharaan">
                            <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <img src ="<?= base_url('assets/img/formd/') . $formd['gambar']; ?>" style="width: 100px;" class="img-thumbnail">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="gambar" id="gambar">
                                <label for="gambar" class="custom-file-label">Choose File</label>
                                <?= form_error('gambar', '<small class="text-danger pl-3">', '</small>');?>
                            </div>
                        </div>
                        <div class="form-group">
                            <img src ="<?= base_url('assets/img/formd/') . $formd['gambar_ktp']; ?>" style="width: 100px;" class="img-thumbnail">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="gambar_ktp" id="gambar_ktp">
                                <label for="gambar_ktp" class="custom-file-label">Choose File</label>
                                <?= form_error('gambar_ktp', '<small class="text-danger pl-3">', '</small>');?>
                            </div>
                        </div>
                        <a href="<?= base_url('Formd/formd') ?>" class="btn btn-danger">Tutup</a>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Edit Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>