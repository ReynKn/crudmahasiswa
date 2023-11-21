<h1>Blank Page</h1>
<div class="container-fluid">
	<h1 class="h3 mb-4 text-gray-800">
		<?php echo $judul; ?>
	</h1>
	<div class="row">
		<div class="col-md-6">
			<row> <a href="<?= base_url('index.php/') ?>Mahasiswa/tambah" class="btn btn-info mb-2">Tambah Mahasiswa</a>
				<!-- <a href="<?= base_url('index.php/') ?>Prodi/tambahP" class="btn btn-info mb-2">Tambah Prodi</a> -->
				<!-- <a href="<?= base_url('index.php/') ?>Prodi/prodi" class="btn btn-info mb-2">Prodi</a> -->
				<!-- <a href="<?= base_url('index.php/') ?>Calpres/calpres" class="btn btn-info mb-2">Calon Presiden</a> -->
			</row>
		</div>
		<div class="col-md-12">
			<?= $this->session->flashdata('message'); ?>
			<table class="table">
				<thead>
					<tr>
						<td>No</td>
						<td>Nama</td>
						<td>Nim</td>
						<td>Email</td>
						<td>Aksi</td>
					</tr>
				</thead>
				<tbody>
					<?php $i = 1; ?>
					<?php foreach ($mahasiswa as $us) : ?>
						<tr>
							<td><?= $i; ?>.</td>
							<td><?= $us['nama']; ?></td>
							<td><?= $us['nim']; ?></td>
							<td><?= $us['email']; ?></td>
							<td>
								<a href="<?= base_url('Mahasiswa/hapus/') . $us['id']; ?>" class="btn btn-danger">Hapus</a>
								<a href="<?= base_url('Mahasiswa/edit/') . $us['id']; ?>" class="btn btn-warning">Edit</a>
								<a href="<?= base_url('Mahasiswa/detail/') . $us['id']; ?>" class="btn btn-info">Detail</a>
							</td>
						</tr>
						<?php $i++; ?>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>