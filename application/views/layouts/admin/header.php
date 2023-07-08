<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Sparklens | <?= $title ?></title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="<?= base_url() ?>asset/images/sparklens/favicon.png" type="image/x-icon" />

	<!-- Fonts and icons -->
	<script src="<?= base_url() ?>asset/templates/admin/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {
				"families": ["Lato:300,400,700,900"]
			},
			custom: {
				"families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"],
				urls: ['<?= base_url() ?>asset/templates/admin/css/fonts.min.css']
			},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="<?= base_url() ?>asset/templates/admin/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= base_url() ?>asset/templates/admin/css/atlantis.css">
	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="<?= base_url() ?>asset/templates/admin/css/demo.css">

	<!-- <link rel="stylesheet" href="<?= base_url() ?>asset/templates/admin/css/style.css"> -->
</head>

<body>
	<div class="wrapper">
		<div class="main-header">
			<!-- Logo Header -->
			<div class="logo-header" data-background-color="white">
				<a href="../index.html" class="logo">
					<img src="<?= base_url() ?>asset/images/sparklens/logo.png" alt="navbar brand" class="navbar-brand" width="125px">
				</a>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="icon-menu"></i>
					</span>
				</button>
				<!-- <button class="topbar-toggler more"><i class="icon-options-vertical"></i></button> -->
				<div class="nav-toggle">
					<button class="btn btn-toggle toggle-sidebar">
						<i class="icon-menu"></i>
					</button>
				</div>
			</div>
			<!-- End Logo Header -->