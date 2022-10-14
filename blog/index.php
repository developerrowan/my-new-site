<?php
require_once("../includes/config.inc.php");

$pageTitle = 'Blog';
$pageDescription = 'Read some thoughts of mine, or research I\'ve done.';
$sideBar = "hobbies-sidebar.inc.php";

require('../includes/header.inc.php'); 
?>
<main>
	<div class="content-frame">
		<h1>Blog</h1>
		<p>This page will display a list of recent blog posts</p>
	</div>
</main>
<?php require('../includes/footer.inc.php'); ?>