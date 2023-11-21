<h1>Blank Page</h1>
<div class="container-fluid">
  <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
  <div class="row">
    <div class="col-md-6"><a href="<?= base_url('/index.php') ?>/Calpres/tambah" class="btn btn-info mb-2">Tambah Calon Presiden</a></div>
    <div class="col-md-12">
      <table class="table">
        <thead>
          <tr>
            <td>No</td>
            <td>NIK</td>
            <td>Nama Lengkap</td>
            <td>Asal</td>
            <td>Partai Pendukung</td>
            <td>Riwayat Pekerjaan</td>
            <td>Umur</td>
            <td>Actions</td>
          </tr>
        </thead>
        <tbody>
        <?php $i = 1; ?>
					<?php foreach ($calpres as $us) : ?>
          <tr>
          <td><?= $i; ?>.</td>
            <td><?= $us['nik']; ?></td>
            <td><?= $us['nama']; ?></td>
            <td><?= $us['asal']; ?></td>
            <td><?= $us['partai_pendukung']; ?></td>
            <td><?= $us['riwayat_pekerjaan']; ?></td>
            <td><?= $us['umur']; ?></td>
            <td>
              <a href="<?= base_url('Calpres/hapus/') . $us['id']; ?>" class="btn btn-danger">Hapus</a>
              <a href="<?= base_url('Calpres/edit/') . $us['id']; ?>" class="btn btn-warning">Edit</a>
              <a href="<?= base_url('Calpres/detail/') . $us['id']; ?>" class="btn btn-info">Detail</a>
            </td>
          </tr>
          <?php $i++; ?>
					<?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>