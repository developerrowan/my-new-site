<?php
require_once("includes/config.inc.php");

$pageTitle = 'Contact';
$pageDescription = 'Contact me to ask questions or say something.';

if ($_SERVER['REQUEST_METHOD'] == "POST") {
	$firstName = $_POST['txtFirstName'] ?? "";
	$lastName = $_POST['txtLastName'] ?? "";
	$email = $_POST['txtEmail'] ?? "";
	$comments = $_POST['txtComments'] ?? "";

	if (validateContactData($firstName, $lastName, $email, $comments)) {
		$msg = "Name: $firstName $lastName <br>";
		$msg .= "Email: $email <br>";
		$msg .= "Comments: $comments";

		sendEmail(ADMIN_EMAIL, "Contact Form", $msg);
		header("Location: " . PROJECT_DIR . "contact-confirmation.php");
		exit();
	} else {
		$msg = getAllSuperGlobals();
		sendEmail(ADMIN_EMAIL, "Security Warning!", $msg);
		header("Location: " . PROJECT_DIR . "error.php");
		exit();
	}
}

require('includes/header.inc.php');
?>
<script src="<?= PROJECT_DIR ?>assets/js/contact-form.js"></script>
<div class="route bg-image" style="background-image: url(assets/img/overlay-bg.jpg)">
	<div class="overlay-mf"></div>
</div>
<main id="main">
	<!-- ======= Contact Section ======= -->
	<section id="contact" class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url(assets/img/overlay-bg.jpg)">
		<div class="overlay-mf"></div>
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="contact-mf">
						<div id="contact" class="box-shadow-full">
							<div class="row">
								<div class="col-md-6">
									<div class="title-box-2">
										<h5 class="title-left">
											Contact
										</h5>
									</div>
									<div>
										<form id="contactForm" action="" method="POST" role="form" class="php-email-form">
											<div class="row">
												<div class="col-md-6 mb-3">
													<div class="form-group">
														<input type="text" name="txtFirstName" class="form-control" id="txtFirstName" placeholder="First Name" required>
													</div>
												</div>
												<div class="col-md-6 mb-3">
													<div class="form-group">
														<input type="text" name="txtLastName" class="form-control" id="txtLastName" placeholder="Last Name" required>
													</div>
												</div>
												<div class="col-md-12 mb-3">
													<div class="form-group">
														<input type="email" class="form-control" name="txtEmail" id="txtEmail" placeholder="Email" required>
													</div>
												</div>
												<div class="col-md-12">
													<div class="form-group">
														<textarea class="form-control" name="txtComments" id="txtComments" rows="5" placeholder="Comments" required></textarea>
													</div>
												</div>
												<div class="col-md-12 text-center my-3">
												</div>
												<div class="col-md-12 text-center">
													<button type="submit" class="button button-a button-big button-rouded">Send</button>
												</div>
											</div>
										</form>
									</div>
								</div>
								<div class="col-md-6">
									<div class="title-box-2 pt-4 pt-md-0">
										<h5 class="title-left">
											Get in Touch
										</h5>
									</div>
									<div class="more-info">
										<p class="lead">
											Send me a message and I'll get back to you as soon as I am able!
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section><!-- End Contact Section -->
</main>
<?php
require('includes/footer.inc.php');

function validateContactData($firstName, $lastName, $email, $comments)
{
	if (empty($firstName) || empty($lastName) || empty($email) || empty($comments)) {
		return false;
	}

	if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
		return false;
	}

	return true;
}
?>