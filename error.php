<?php 
require_once("includes/config.inc.php");

$pageTitle = 'Error';
$pageDescription = 'An error has occurred.';
$sideBar = '';

require('includes/header.inc.php'); 
?>
<main>
	<div class="content-frame">
		<h1>Uh oh!</h1>
		<p>Sorry about this, but an error occurred. We're working on fixing it.</p>
	</div>
</main>
<?php require('includes/footer.inc.php'); ?>