<?php
require_once("../includes/config.inc.php");
require_once("../includes/PageDataAccess.inc.php");

$pda = new PageDataAccess(getDBLink());
$activePages = $pda->getPageList();

$pageTitle = 'Blog';
$pageDescription = 'Read some thoughts of mine, or research I\'ve done.';
$sideBar = "hobbies-sidebar.inc.php";

require('../includes/header.inc.php'); 

// wraps the blog pages in an unordered list
function createBlogList($pages){

	$html = "<ul class=\"blog-list\">";

	foreach ($pages as $p) {
		$html .= "<li>";
		$html .= 	"<a href=\"blog-post.php?pageId=" . $p['pageId'] . "\">";
		$html .= 		$p['title'];
		$html .= 	"</a>";
		$html .= "</li>";
		
	}

	$html .= "</ul>";
	return $html;
}
?>
<main>
	<div class="content-frame">
		<h1>Blog</h1>
		<?= createBlogList($activePages) ?>
	</div>
</main>
<?php require('../includes/footer.inc.php'); ?>