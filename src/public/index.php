<?php
declare(strict_types=1);

session_start();

require_once("app/views/include/header.view.php");
require "vendor/autoload.php";

// Fetch the url after the slash bar : 
$url = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
$method = $_SERVER['REQUEST_METHOD'];

if ($url === '') {
    $HikeController = new HikeController();
    $TagController = new TagController();
    $TagController->indexTag();
    $HikeController->index();
}

if ($url === 'index') {
    $HikeController = new HikeController();
    $HikeController->index();
}

if($url === 'registration'){
    $authController = new AuthController();

    if($method === 'GET')
    {
        $authController->showRegistrationForm();
    }

    if($method === 'POST')
    {
        $authController->register($_POST);
    }
}

if ($url === 'logout') {
    $authController  = new AuthController();
    $authController->logout();
}

if ($url === 'login') {
    $authController = new AuthController();

    if ($method === 'GET') {
        $authController->showLoginForm();
    }

    if ($method === 'POST') {
        $authController->login($_POST);
    }
}

if ($url === 'hike') {
    $code = $_GET['code'];
    $hikeController = new HikeController();
    $hikeController->show($code);
}

if ($url === 'tag') {
    $idTag = $_GET['code'];
    $hikeController = new HikeController();
    $hikeController->showByTag($idTag);
}