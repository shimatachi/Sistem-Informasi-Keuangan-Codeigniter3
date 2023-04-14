<?php error_reporting(0); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title><?= $title ;?></title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="assets/assets/img/icon.ico" type="image/x-icon"/>

	<!-- Fonts and icons -->
	<script src="<?= site_url('assets/assets/') ;?>js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['<?= site_url('assets/assets/') ;?>css/fonts.min.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="<?= site_url('assets/assets/') ;?>css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= site_url('assets/assets/') ;?>css/atlantis.min.css">
	<link rel="stylesheet" href="<?= site_url('assets/assets/') ;?>css/font-awesome.css">
	<link rel="stylesheet" href="<?= site_url('assets/assets/') ;?>css/bootstrap5.css">

	<script src="<?= site_url('assets/assets/ckeditor/') ;?>ckeditor.js"></script>


</head>
<body>
	<div class="wrapper">
		<div class="main-header">
			<!-- Logo Header -->
			<div class="logo-header" data-background-color="light-blue2">
				
				<a href="index.html" class="logo">
					
				</a>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="icon-menu"></i>
					</span>
				</button>
				<button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
				<div class="nav-toggle">
					<button class="btn btn-toggle toggle-sidebar">
						<i class=""></i>
					</button>
				</div>
			</div>
			<!-- End Logo Header -->

			<!-- Navbar Header -->
			<nav class="navbar navbar-header navbar-expand-lg" data-background-color="light-blue2">
				
				<div class="container-fluid">
					<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
						<li class="nav-item toggle-nav-search hidden-caret">
							<a class="nav-link" data-toggle="collapse" href="#search-nav" role="button" aria-expanded="false" aria-controls="search-nav">
								<i class="fa fa-search"></i>
							</a>
						</li>
						<li class="nav-item dropdown hidden-caret">
							<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
								<div class="avatar-sm">
									<img src="<?= site_url('assets/assets/img/sauro.jpg') ;?>" alt="..." class="avatar-img rounded-circle">
								</div>
							</a>
							<ul class="dropdown-menu dropdown-user animated fadeIn">
								<div class="dropdown-user-scroll scrollbar-outer">
									<li>
										<div class="user-box">
											<div class="avatar-lg"><img src="<?= site_url('assets/assets/img/sauro.jpg') ;?>" alt="image profile" class="avatar-img rounded"></div>
											<div class="u-text">
												<h4><?= $user['nama_lengkap'] ;?></h4>
												<p class="text-muted"></p><a href="<?= site_url('kas_user/home/logout_user') ;?>" class="btn btn-xs btn-secondary btn-sm">Logout</a>
											</div>
										</div>
									</li>
								</div>
							</ul>
						</li>
					</ul>
				</div>
			</nav>
			<!-- End Navbar -->
		</div>

		<!-- Sidebar -->
		<div class="sidebar sidebar-style-2">			
			<div class="sidebar-wrapper scrollbar scrollbar-inner">
				<div class="sidebar-content">
					<div class="user">
						<div class="avatar-sm float-left mr-2">
							<img src="<?= site_url('assets/assets/img/sauro.jpg') ;?>" alt="..." class="avatar-img rounded-circle">
						</div>
						<div class="info">
							<a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
								<span>
									<?= $user['nama_lengkap'] ;?>
									<span class="user-level"><?= $user['level'] ;?></span>
								</span>
							</a>
							<div class="clearfix"></div>

							<div class="collapse in" id="collapseExample">
								<ul class="nav">
									<li>
										<!-- <a href="<?= site_url('kas_user/home/settings') ;?>"> -->
										<a href="#belum">
											<span class="link-collapse">Settings</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<ul class="nav nav-primary">
						<li class="nav-item active">
							<a href="<?= site_url('kas_user/home/halaman') ;?>" >
								<i class="fas fa-home"></i>
								<p>Dashboard</p>
								<span class=""></span>
							</a>
						</li>
						<li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
							<h4 class="text-section">Components</h4>
						</li>
						<li class="nav-item">
							<a href="<?= site_url('kas_user/home/data1') ;?>">
								<i class="fa fa-user"></i>
								<span class="sub-item">Data Pengguna</span>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?= site_url('kas_user/home/data_rekening') ;?>">
								<i class="fa fa-university"></i>
								<span class="sub-item">Data Rekening</span>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?= site_url('kas_user/home/data2') ;?>">
								<i class="fa fa-wallet"></i>
								<span class="sub-item">Data Kas</span>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?= site_url('kas_user/home/data3') ;?>">
								<i class="fa fa-wallet"></i>
								<span class="sub-item">Data Paypal</span>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
        <!-- End Sidebar -->
        