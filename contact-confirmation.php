<?php
require_once("includes/config.inc.php");

$pageTitle = 'Message sent';
$pageDescription = 'Thank you for sending your message.';

require('includes/header.inc.php');
?>
<div class="vh-100 hero hero-single route bg-image" style="background-image: url(assets/img/overlay-bg.jpg)">
	<div class="overlay-mf"></div>
	<div class="hero-content display-table">
		<div class="table-cell">
			<div class="container">
				<h2 class="hero-title mb-4">Thank you!</h2>
				<p>I've received your message, and will get back to you as soon as possible.</p>
			</div>
		</div>
	</div>
</div>
<?php require('includes/footer.inc.php'); ?>