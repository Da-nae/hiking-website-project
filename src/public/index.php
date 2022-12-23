<?php
declare(strict_types=1);

session_start();

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
    include 'app/views/include/header.view.php';
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
    include 'app/views/hikeByTag.view.php';
    include 'app/views/include/footer.view.php';
    $hikeController = new HikeController();
    $hikeController->show($code);
}

if ($url === 'tag') {
    $idTag = $_GET['code'];
    $hikeController = new HikeController();
    $hikeController->showByTag($idTag);
}

if ($url === 'user') {
    // $userID = $_GET['code'];
    $userController = new UserController();
    $userController->showUser();
}

if($url === 'create') {

    $createHike = new HikeController();

    if($method === 'GET') {
        $createHike->showCreate();
    }
    if ($method === 'POST') {
        $createHike->create($_POST);  
    }
}

if($url === 'delete') {
    $IDhike = $_GET['code'];
    $deleteHike = new HikeController();
    $deleteHike->delete($IDhike);
}

if($url === 'edit') {

    $hikeID = $_GET['code'];
    $editHike = new HikeController();

    if($method === 'GET') {
        $editHike->showEdit($hikeID);
    }
    if($method === 'POST') {
        $editHike->edit($_POST);
    }
}