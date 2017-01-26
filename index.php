<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

// Start session
session_start();

// Include config
require('config.php');

require('classes/Bootstrap.php');
require('classes/Controller.php');
require('classes/Model.php');
require('classes/Messages.php');

require('controllers/Home.php');
require('controllers/Shares.php');
require('controllers/Users.php');

require('models/home.php');
require('models/share.php');
require('models/user.php');


$bootstrap = new Bootstrap($_GET);
$controller = $bootstrap->createController();

if($controller) {
	$controller->executeAction();
}