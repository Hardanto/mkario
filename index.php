<?php
// Start the session
session_start();

// required
//require_once($_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php');
require_once('vendor/autoload.php');
//require_once('vendor/autoload');

/**
 * @Todo:
 * On this page we run through a view methods to check the user state. e.g.:
 * If the user was already on the site, logged in, log siteviews etc. (MAke a list of thing to add
 */

// head to the landing
return header('Location: home');

// end
//exit;

?>
