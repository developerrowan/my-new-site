<?php
require_once("includes/config.inc.php");

$pageTitle = "Page Not Found";
$pageDescription = "We're sorry, we cannot find the page you are looking for.";

require("includes/header.inc.php");

?>
<div class="vh-100 hero hero-single route bg-image" style="background-image: url(assets/img/overlay-bg.jpg)">
	<div class="overlay-mf"></div>
	<div class="hero-content display-table">
		<div class="table-cell">
			<div class="container">
				<h2 class="hero-title mb-4">Page Not Found</h2>
				<p>We're sorry, we can't find the page you're looking for.</p>
			</div>
		</div>
	</div>
</div>

<?php require("includes/footer.inc.php"); ?>