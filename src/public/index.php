<?php
declare(strict_types=1);
require_once("app/views/layout/header.view.php");
require "vendor/autoload.php";

session_start();

// Fetch the url after the slash bar : 
$url = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
$method = $_SERVER['REQUEST_METHOD'];

if ($url === '/' || $url === '') {
    $HomeController = new HomeController();
    $HomeController->index();
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

// if ($url === 'login') {
//     $authController = new AuthController();

//     if ($method === 'GET') {
//         $authController->showLoginForm();
//     }

//     if ($method === 'POST') {
//         $authController->login($_POST);
//     }
// }

// if ($url === 'registration') {
//     $authController = new AuthController();

//     if ($method === 'GET') {
//         $authController->showRegistrationForm();
//     }

//     if ($method === 'POST') {
//         $authController->register($_POST);
//     }
// }

// if ($url === 'product') {
//     $code = $_GET['code'];
//     $productController = new ProductController();
//     $productController->show($code);
// }
