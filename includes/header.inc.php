<!DOCTYPE html>
<html>
<head>
	<title><?= "$pageTitle | My New Site"; ?></title>
	<meta charset="utf-8">
	<meta name="description" content="<?= $pageDescription; ?>">
    <meta name="viewport" content="width=device-width">
	<link rel="stylesheet" type="text/css" href="<?= PROJECT_DIR ?>styles/reset.css">
	<link rel="stylesheet" type="text/css" href="<?= PROJECT_DIR ?>styles/main.css">
	<script type="text/javascript" src="<?= PROJECT_DIR ?>js/main.js"></script>
</head>
<body>
	<header>
		<h1>Welcome To My Web Site</h1>
	</header>
	<nav id="main-nav">
		<ul>
			<li><a href="<?= PROJECT_DIR ?>index.php">Home</a></li>
			<li><a href="<?= PROJECT_DIR ?>pictures.php">Pictures</a></li>
			<li><a href="<?= PROJECT_DIR ?>blog/index.php">Blog</a></li>
			<li><a href="<?= PROJECT_DIR ?>contact.php">Contact</a></li>
		</ul>
	</nav>
	<div id="content">