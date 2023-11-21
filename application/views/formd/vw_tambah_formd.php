<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">
        <?php echo $judul; ?>
    </h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header justify-content-center">
                    Form Tambah Data Peliharaan
                </div>
                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="nama_lengkap">Nama Lengkap</label>
                            <input name="nama_lengkap" type="text" value="<?= set_value('nama_lengkap'); ?>"
                                class="form-control" id="nama_lengkap" placeholder="Nama Lengkap">
                            <?= form_error('nama_lengkap', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="tanggal">Tanggal Lahir Peliharaan</label>
                            <input name="tanggal" type="date" value="<?= set_value('tanggal'); ?>" class="form-control"
                                id="tanggal">
                            <?= form_error('tanggal', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="jenis_kelamin">Jenis Kelamin Peliharaan</label>
                            <select name="jenis_kelamin" value="<?= set_value('jenis_kelamin') ?>" id=" jenis_kelamin"
                                class="form-control">
                                <option value="" selected disabled>Jenis Kelamin</option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="perempuan">Perempuan</option>
                            </select>
                            <?= form_error('jenis_kelamin', '<small class="text-danger">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" name="email" value="<?= set_value('email'); ?>" class="form-control"
                                id="email" placeholder="Email">
                            <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="username">Nama Peliharaan</label>
                            <input type="text" name="username" value="<?= set_value('username'); ?>"
                                class="form-control" id="output_lulusan" placeholder="Nama Peliharaan">
                            <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="gambar">Gambar Peliharaan</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="gambar" id="gambar">
                                <label for="gambar" class="custom-file-label">Choose File</label>
                            </div>
                        </div>
                        <div class="form-group">
                        <label for="gambar">Gambar Identitas (KTP/Paspor)</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="gambar_ktp" id="gambar_ktp">
                                <label for="gambar_ktp" class="custom-file-label">Choose File</label>
                            </div>
                        </div>

                        <a href="<?= base_url('Formd/formd') ?>" class="btn btn-danger">Tutup</a>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah
                            Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>