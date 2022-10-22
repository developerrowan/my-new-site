<?php
require_once("includes/config.inc.php");

$pageTitle = 'Contact';
$pageDescription = 'Contact me to ask questions or say something.';
$sideBar = "hobbies-sidebar.inc.php";

if($_SERVER['REQUEST_METHOD'] == "POST") {
	$firstName = $_POST['txtFirstName'] ?? "";
	$lastName = $_POST['txtLastName'] ?? "";
	$email = $_POST['txtEmail'] ?? "";
	$comments = $_POST['txtComments'] ?? "";

	if(validateContactData($firstName, $lastName, $email, $comments)) {
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
<main>
	<script src="<?= PROJECT_DIR ?>js/contact-form.js"></script>
	<div class="content-frame">
		<h1>Contact Me</h1>
		<form id="contactForm" method="POST" action="">
			<table border="1">
				<tr>
					<td align="right" valign="bottom">First Name:</td>
					<td>
						<div class="validation-message" id="vFirstName"></div>
						<input type="text" id="txtFirstName" name="txtFirstName">
					</td>
				</tr>
				<tr>
					<td align="right" valign="bottom">Last Name:</td>
					<td>
						<div class="validation-message" id="vLastName"></div>
						<input type="text" id="txtLastName" name="txtLastName">
					</td>
				</tr>
				<tr>
					<td align="right" valign="bottom">Email:</td>
					<td>
						<div class="validation-message" id="vEmail"></div>
						<input type="text" id="txtEmail" name="txtEmail">
					</td>
				</tr>
				<tr>
					<td align="right" valign="top">Comments:</td>
					<td>
						<div class="validation-message" id="vComments"></div>
						<textarea id="txtComments" name="txtComments"></textarea>
					</td>
				</tr>
				<tr>
					<td align="right">&nbsp;</td>
					<td>
						<input type="submit" value="SUBMIT">
					</td>
				</tr>
			</table>
		</form>
	</div>
</main>
<?php 
require('includes/footer.inc.php'); 

function validateContactData($firstName, $lastName, $email, $comments) {
	if(empty($firstName) || empty($lastName) || empty($email) || empty($comments)) {
		return false;
	}

	if(filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
		return false;
	}

	return true;
}
?>