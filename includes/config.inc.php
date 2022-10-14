<?php

if($_SERVER['SERVER_NAME'] == "localhost") {
    define("PROJECT_DIR", "/my-new-site/");
    define("DEBUG_MODE", true);
} else {
    define("PROJECT_DIR", "/");
    define("DEBUG_MODE", false);
}

define("ADMIN_EMAIL", "mail@devinrowan.com");
define("IMAGES_DIR", PROJECT_DIR . "images/");

if(DEBUG_MODE) {
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
}