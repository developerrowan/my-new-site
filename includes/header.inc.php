<?php
$url = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

function isActive($path)
{
	global $url;

	$curr_path = parse_url($url, PHP_URL_PATH);

	if ($path == 'index' && strpos($curr_path, $path) && !strpos($curr_path, 'blog')) {
		return 'active';
	} else if ($path == 'index' && strpos($curr_path, 'index') && strpos($curr_path, 'blog')) {
		return '';
	}

	$active = strpos($curr_path, $path) ? 'active' : '';

	return $active;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">

	<title><?= $pageTitle; ?> | My New Site</title>
	<meta content="<?= $pageDescription; ?>" name="description">

	<!-- Favicons -->
	<link href="<?= PROJECT_DIR ?>assets/img/favicon.png" rel="icon">
	<link href="<?= PROJECT_DIR ?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">

	<!-- Vendor CSS Files -->
	<link href="<?= PROJECT_DIR ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?= PROJECT_DIR ?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
	<link href="<?= PROJECT_DIR ?>assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
	<link href="<?= PROJECT_DIR ?>assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

	<!-- Template Main CSS File -->
	<link href="<?= PROJECT_DIR ?>assets/css/style.css" rel="stylesheet">

	<!-- =======================================================
  * Template Name: DevFolio - v4.9.1
  * Template URL: https://bootstrapmade.com/devfolio-bootstrap-portfolio-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

	<!-- ======= Header ======= -->
	<header id="header" class="fixed-top">
		<div class="container d-flex align-items-center justify-content-between">

			<h1 class="logo"><a href="<?= PROJECT_DIR ?>index.php">Devin Rowan</a></h1>
			<!-- Uncomment below if you prefer to use an image logo -->
			<!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

			<nav id="navbar" class="navbar">
				<ul>
					<li><a class="nav-link <?= isActive('index'); ?>" href="<?= PROJECT_DIR ?>index.php">Home</a></li>
					<li><a class="nav-link <?= isActive('pictures'); ?>" href="<?= PROJECT_DIR ?>pictures.php">Pictures</a></li>
					<li><a class="nav-link <?= isActive('blog'); ?>" href="<?= PROJECT_DIR ?>blog/index.php">Blog</a></li>
					<li><a class="nav-link <?= isActive('contact'); ?>" href="<?= PROJECT_DIR ?>contact.php">Contact</a></li>
				</ul>
				<i class="bi bi-list mobile-nav-toggle"></i>
			</nav><!-- .navbar -->

		</div>
	</header><!-- End Header -->