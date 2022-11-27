<?php 
require_once("includes/config.inc.php");

$pageTitle = 'Error';
$pageDescription = 'An error has occurred.';

require('includes/header.inc.php'); 
?>
<div class="vh-100 hero hero-single route bg-image" style="background-image: url(assets/img/overlay-bg.jpg)">
    <div class="overlay-mf"></div>
    <div class="hero-content display-table">
      <div class="table-cell">
        <div class="container">
          <h2 class="hero-title mb-4">Uh oh!</h2>
		  <p>Sorry about this, but an error occurred. We're working on fixing it.</p>
        </div>
      </div>
    </div>
  </div>
<?php require('includes/footer.inc.php'); ?>