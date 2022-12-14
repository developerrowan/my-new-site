<?php
require_once("includes/config.inc.php");

$pageTitle = 'Privacy Policy';
$pageDescription = 'Read my privacy policy to know your data is in good hands.';

require('includes/header.inc.php');
?>
<div class="vh-100 hero hero-single route bg-image" style="background-image: url(assets/img/overlay-bg.jpg)">
	<div class="overlay-mf"></div>
	<div class="hero-content display-table">
		<div class="table-cell">
			<div class="container">
				<h2 class="hero-title mb-4">Privacy Policy</h2>
				<p>
					I respect your privacy. This site uses Google Analytics to gather information that will be used to improve the quality of the site. Google Analytics uses cookies to collect information. The information collected is considered to be anonymous. For more information about how google collects and uses information, visit this <a href="https://www.google.com/policies/privacy/" target="_blank">page</a>.
				</p>
			</div>
		</div>
	</div>
</div>
<?php require('includes/footer.inc.php'); ?>