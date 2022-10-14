<?php

set_error_handler("customErrorHandler");

if($_SERVER['SERVER_NAME'] == "localhost") {
    define("PROJECT_DIR", "/my-new-site/");
    define("DEBUG_MODE", true);
    define("DB_HOST", "localhost");
    define("DB_USER", "root");
    define("DB_PASSWORD", "");
    define("DB_NAME", "my_new_site");
} else {
    define("PROJECT_DIR", "/");
    define("DEBUG_MODE", false);
    define("DB_HOST", "");
    define("DB_USER", "");
    define("DB_PASSWORD", "");
    define("DB_NAME", "");
}

define("ADMIN_EMAIL", "mail@devinrowan.com");
define("IMAGES_DIR", PROJECT_DIR . "images/");

if(DEBUG_MODE) {
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
}

function sendEmail($to, $subject, $msg, $headers="") {
    return mail($to, $subject, $msg, $headers) ? true : false;
}

// Instead of using the defualt PHP error handler function 
// when an error occurs, we want this function to be used:
function customErrorHandler($errno, $errstr, $errfile, $errline){

	$errorMsg = "<br><b>THIS IS OUR CUSTOM ERROR HANDLER</b>";
	$errorMsg .= "<br>ERROR NUMBER: " . $errno;
	$errorMsg .= "<br>ERROR MSG: " . $errstr;
	$errorMsg .= "<br>FILE: " . $errfile;
	$errorMsg .= "<br>LINE NUMBER: " . $errline;
	// In the future we may want to include many more details in our 
	// custom error message

	if(DEBUG_MODE){
		// in debug mode we display all details of the error in the browser
		echo($errorMsg);
	}else{
		// when not debugging (on the live site) we don't want users to see ugly error messages
		// so instead, we get an email with the gory details and redirect users to our friendly error page.
		sendEmail(ADMIN_EMAIL, "WEBSITE ERROR!", $errorMsg . getAllSuperGlobals());
		header("Location: " . PROJECT_DIR . "error.php");
		exit();
	}
}

// Dumps all super globals to help us with debugging
function getAllSuperGlobals(){

	$str = "<br>POST VARS:<br>" . print_r($_POST, true);
	$str .= "<br>GET VARS:<br>" .  print_r($_GET, true);
	$str .= "<br>SERVER VARS:<br>" .   print_r($_SERVER, true);
	$str .= "<br>FILE VARS:<br>" .  print_r($_FILES, true);
	$str .= "<br>COOKIE VARS:<br>" .  print_r($_COOKIE, true);
	$str .= "<br>REQUEST VARS:<br>" .  print_r($_REQUEST, true);
	$str .= "<br>ENV VARS:<br>" .  print_r($_ENV, true);

	// Only include the SESSION super global if the site is using sessions
	if(isset($_SESSION)){
		$str .= "<br>SESSION VARS:<br>" .  print_r($_SESSION, true);
	}

	return $str;
}

$link = null;

function getDBLink() {
    global $link;

    if($link == null) {
        $link = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

        if(!$link) {
            throw new Exception(mysqli_connect_error());
        }
    }

    return $link;
}

function redirectTo404Page() {
    header("HTTP/1.0 404 Not Found");
    header("Location: " . PROJECT_DIR . "404.php");
}

// Removes 'dangerous' html tags and attributes from a string of html.
function sanitizeHtml($inputHTML){
       
    // we'll allow these tags, but no others (we are white-listing)
    $allowed_tags = array('<sub>','<sup>','<div>','<span>','<h1>','<h2>','<br>','<h3>','<h4>','<h5>','<h6>','<h7>','<i>','<b>','<a>','<ul>','<ol>','<em>','<li>','<pre>','<hr>','<blockquote>','<p>','<img>','<strong>','<code>');

    //replace dangerous attributes...
    $bad_attributes = array('onerror','onmousemove','onmouseout','onmouseover','onkeypress','onkeydown','onkeyup','onclick','onchange','onload','javascript:');
    $inputHTML = str_replace($bad_attributes,"x",$inputHTML);
   
    $allowed_tags = implode('',$allowed_tags);
    $inputHTML = strip_tags($inputHTML, $allowed_tags);

    return $inputHTML;

}