<?php 
require_once("includes/config.inc.php");

$pageTitle = 'Message sent';
$pageDescription = 'Thank you for sending your message.';
$sideBar = '';

require('includes/header.inc.php'); 
?>
<main>
	<div class="content-frame">
		<h1>Thank you!</h1>
		<p>I've received your message, and will get back to you as soon as possible.</p>
	</div>
</main>
<?php require('includes/footer.inc.php'); ?>