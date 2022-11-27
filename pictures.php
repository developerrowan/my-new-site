<?php
require_once("includes/config.inc.php");

$pageTitle = 'Pictures';
$pageDescription = 'View some interesting pictures I have.';

require('includes/header.inc.php');
?>
<div class="hero hero-single route bg-image" style="background-image: url(assets/img/overlay-bg.jpg)">
	<div class="overlay-mf"></div>
	<div class="hero-content display-table">
		<div class="table-cell">
			<div class="container">
				<h2 class="hero-title mb-4">Pictures</h2>
			</div>
		</div>
	</div>
</div>
<main id="main">
	<section id="blog" class="blog-mf sect-pt4 route">
		<div class="container">
			<div class="row">
				<div id="carouselExampleControls" class="carousel slide carousel-fade" data-bs-ride="carousel">
					<div class="carousel-inner">
						<?php
						$images = [
							"Jellyfish.jpg",
							"Koala.jpg",
							"Penguins.jpg",
							"Tulips.jpg"
						];

						for ($i = 0; $i < count($images); $i++) {
							$image = $images[$i];
							$alt = '';

							if (preg_match('/\/(\w+)./', $image, $capture) == 1) {
								$alt = strtolower($capture[1]);
							}

							$className = 'carousel-item' . ($i == 0 ? ' active' : '');

							$html = '<div class="' . $className . '">';
							$html .= '<img src="' . PROJECT_DIR . 'assets/img/' . $image . '" class="d-block w-100" alt="' . $alt . '">';
							$html .= '</div>';

							echo $html;
						}
						?>
					</div>
					<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Previous</span>
					</button>
					<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Next</span>
					</button>
				</div>
			</div>
		</div>
	</section>
</main>
<?php require('includes/footer.inc.php'); ?>