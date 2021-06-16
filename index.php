<?php
require_once('vendor/autoload.php');

use Controllers\MainController;

// Require chat page
$controller = new MainController();

if ($_SERVER['REQUEST_METHOD'] != "POST") {
    $msgs = $controller->getMessages();
    extract($msgs);
    require_once("Resources/views/chat.php");
} else {
    return $controller->InitRequest(['message' => $_POST['msg'], 'author' => $_POST['author']]);
}