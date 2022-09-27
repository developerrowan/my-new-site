<?php 
$pageTitle = 'Pictures';
$pageDescription = 'View some interesting pictures I have.';

require('includes/header.inc.php'); 
?>
<main>
	<script src="/my-new-site/js/photo-gallery.js"></script>
	<div class="content-frame">
		<h1>Pictures</h1>
		<div id="image-gallery">
			<img id="mainImg" src="" />
		</div>
		<br>
		<input type="button" id="btnPrev" value="Prev" />
		&nbsp;
		<input type="button" id="btnNext" value="Next" />
	</div>
</main>
<?php require('includes/footer.inc.php'); ?>