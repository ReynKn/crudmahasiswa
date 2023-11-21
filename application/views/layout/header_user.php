<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="<?= base_url('assets/') ?>assets/img/apple-icon.png" />
	<link rel="icon" type="image/png" href="<?= base_url('assets/') ?>assets/img/favicon.png" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>BPF TI A 2023</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no"
		name="viewport" />
	<!--     Fonts and icons     -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet" />
	<!-- CSS Files -->
	<link href="<?= base_url('assets/') ?>/assets/css/bootstrap.min.css" rel="stylesheet" />
	<link href="<?= base_url('assets/') ?>/assets/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link href="<?= base_url('assets/') ?>assets/demo/demo.css" rel="stylesheet" />
</head>
<body class="">
	<div class="wrapper">
		<div class="sidebar" data-color="white" data-active-color="danger" style="z-index: 2;">
			<div class="logo">
				<a class="simple-text logo-mini">
					<div class="logo-image-small">
						<img src="<?= base_url('assets/') ?>assets/img/profile/default.jpg" />
					</div>
					<!-- <p>CT</p> -->
				</a>
				<a class="simple-text logo-normal">
					BPF TI A 2023
				</a>
			</div>
			<div class="sidebar-wrapper">
				<ul class="nav">
					<li class="active">
						<a href="<?= site_url('Profil/') ?>">
							<i class="nc-icon nc-tile-56"></i>
							<p>Profil</p>
						</a>
					</li>
					<li class="active">
						<a href="<?= site_url('Auth/logout') ?>">
							<i class="nc-icon nc-spaceship"></i>
							<p>Logout</p>
						</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="main-panel" style="z-index: 1;">
			<!-- Navbar -->
			<nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
				<div class="container-fluid">
					<div class="collapse navbar-collapse justify-content-end" id="navigation">
						<ul class="navbar-nav">
							<li class="nav-item btn-rotate dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
									data-toggle="dropdown" aria-haspopup="true">
									<span class="mr-2 d-none d-lg-inline text-gray-600 small">
										<?= $user['nama']; ?>
									</span>
									<img class="img-profile rounded-circle"
										src="<?= base_url('assets/assets/img/profile/') . $user['gambar']; ?> ">
								</a>
								<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
									<a class="dropdown-item" href="#">Action</a>
									<a class="dropdown-item" href="#">Another action</a>
									<a class="dropdown-item" href="<?= base_url('auth/logout'); ?>">Log Out</a>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</nav>
			<!-- End Navbar -->
			<div class="content" style="margin-left: 260px;">