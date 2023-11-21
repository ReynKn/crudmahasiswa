<h1>Blank Page</h1>
<div class="container-fluid">
  <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
  <div class="row">
    <div class="col-md-6"><a href="<?= base_url('/index.php') ?>/Formd/tambahF" class="btn btn-info mb-2">Tambah Data</a></div>
    <div class="col-md-12">
      <?= $this->session->flashdata('message'); ?>
      <table class="table">
        <thead>
          <tr>
            <td>No</td>
            <td>Nama Lengkap</td>
            <td>Tanggal Lahir</td>
            <td>Jenis Kelamin</td>
            <td>Email</td>
            <td>Nama Peliharaan</td>
            <td>Gambar Peliharaan</td>
            <td>Gambar KTP</td>
            <td>Actions</td>
          </tr>
        </thead>
        <tbody>
          <?php $i = 1; ?>
          <?php foreach ($formd as $us) : ?>
            <tr>
              <td><?= $i; ?>.</td>
              <td><?= $us['nama_lengkap']; ?></td>
              <td><?= $us['tanggal']; ?></td>
              <td><?= $us['jenis_kelamin']; ?></td>
              <td><?= $us['email']; ?></td>
              <td><?= $us['username']; ?></td>
              <td><img src="<?= base_url('assets/img/formd/') . $us['gambar']; ?>" style="width: 100px;" class="img-thumbnail"></td>
              <td><img src="<?= base_url('assets/img/formd/') . $us['gambar_ktp']; ?>" style="width: 100px;" class="img-thumbnail"></td>
              <td>
                <a href="<?= base_url('Formd/hapus/') . $us['id']; ?>" class="btn btn-danger">Hapus</a>
                <a href="<?= base_url('Formd/edit/') . $us['id']; ?>" class="btn btn-warning">Edit</a>
                <a href="<?= base_url('Formd/detail/') . $us['id']; ?>" class="btn btn-info">Detail</a>
              </td>
            </tr>
            <?php $i++; ?>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>