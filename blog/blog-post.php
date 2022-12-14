<?php
require_once("../includes/config.inc.php");
require_once("../includes/PageDataAccess.inc.php");

$pda = new PageDataAccess(getDBLink());
$page = null;

// use the pageId query string param to get all the data for the blog page
if (isset($_GET['pageId'])) {

	try {
		$page = $pda->getPageById($_GET['pageId']);
	} catch (Exception $e) {
		redirectTo404Page();
	}
}

if (!$page || $page['active'] == "no") {
	redirectTo404Page();
}


$pageTitle = $page['title'];
$pageDescription = $page['description'];

require("../includes/header.inc.php");
?>

<div class="hero hero-single route bg-image" style="background-image: url(assets/img/overlay-bg.jpg)">
	<div class="overlay-mf"></div>
	<div class="hero-content display-table">
		<div class="table-cell">
			<div class="container">
				<h2 class="hero-title mb-4"><?= $page['title']; ?></h2>
				<ol class="breadcrumb d-flex justify-content-center">
					<li class="breadcrumb-item">
						<a href="#"><span class="bi bi-calendar"></span> <?= $pda->niceDate($page['publishedDate']); ?></a>
					</li>
					<li class="breadcrumb-item">
						<a href="#"><span class="bi bi-tag"></span> <?= $page['categoryName'] ?></a>
					</li>
				</ol>
			</div>
		</div>
	</div>
</div>

<main id="main">

	<!-- ======= Blog Single Section ======= -->
	<section class="blog-wrapper sect-pt4" id="blog">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<div class="post-box">
						<div class="post-thumb">
							<img src="assets/img/post-1.jpg" class="img-fluid" alt="">
						</div>
						<div class="article-content">
							<?= $page['content']; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section><!-- End Blog Single Section -->

</main><!-- End #main -->

<?php require("../includes/footer.inc.php"); ?>