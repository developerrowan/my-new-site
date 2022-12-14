<?php
require_once("../includes/config.inc.php");
require_once("../includes/PageDataAccess.inc.php");

$pda = new PageDataAccess(getDBLink());
$activePages = $pda->getPageList();

$pageTitle = 'Blog';
$pageDescription = 'Read some thoughts of mine, or research I\'ve done.';

require('../includes/header.inc.php');

// wraps the blog pages in an unordered list
function createBlogList($pages)
{

	$html = "";

	foreach ($pages as $p) {
		$uri = 'blog-post.php?pageId=' . $p['pageId'];

		$html .= '<div class="col-md-4">';
		$html .= '<div class="card card-blog">';
		$html .=      '<div class="card-img">';
		$html .=       '<a href="' . $uri . '"><img src="' . PROJECT_DIR . 'assets/img/post-1.jpg" alt="" class="img-fluid"></a>';
		$html .=      '</div>';
		$html .=      '<div class="card-body">';
		$html .=        '<div class="card-category-box">';
		$html .=          '<div class="card-category">';
		$html .=           '<h6 class="category">' . $p['categoryName'] . '</h6>';
		$html .=         '</div>';
		$html .=       '</div>';
		$html .=       '<h3 class="card-title"><a href="' . $uri . '">' . $p['title'] . '</a></h3>';
		$html .=        '<p class="card-description">';
		$html .=        $p['description'];
		$html .=        '</p>';
		$html .=      '</div>';
		$html .=      '<div class="card-footer">';
		$html .=        '<div class="post-author">';
		$html .=          '<a href="#">';
		$html .=            '<span class="author">Devin Rowan</span>';
		$html .=          '</a>';
		$html .=        '</div>';
		$html .=        '<div class="post-date">';
		$html .=          '<span class="bi bi-clock"></span> 10 min';
		$html .=        '</div>';
		$html .=      '</div>';
		$html .=    '</div>';
		$html .=  '</div>';
	}

	return $html;
}
?>
<div class="hero hero-single route bg-image" style="background-image: url(assets/img/overlay-bg.jpg)">
	<div class="overlay-mf"></div>
	<div class="hero-content display-table">
		<div class="table-cell">
			<div class="container">
				<h2 class="hero-title mb-4">Blog</h2>
			</div>
		</div>
	</div>
</div>

<main id="main">

	<!-- ======= Blog Section ======= -->
	<section id="blog" class="blog-mf sect-pt4 route">
		<div class="container">
			<div class="row">
				<?= createBlogList($activePages); ?>
			</div>
		</div>
	</section><!-- End Blog Section -->

</main><!-- End #main -->
<?php require('../includes/footer.inc.php'); ?>