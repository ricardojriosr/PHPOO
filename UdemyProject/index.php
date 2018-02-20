<?php
//Start Sessions
session_start();

//Include Config
require('config.php');

//Include Base Classes
require('classes/Messages.php');
require('classes/Bootstrap.php');
require('classes/Controller.php');
require('classes/Model.php');

//Include Models
require('models/home.php');
require('models/user.php');
require('models/share.php');

//Include Controllers
require('controllers/home.php');
require('controllers/users.php');
require('controllers/shares.php');

//Execute Actions based on request
$bootstrap = new Bootstrap($_GET);
$controller = $bootstrap->createController();
if ($controller) {
    $controller->executeAction();
}

?>
