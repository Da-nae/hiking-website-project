<?php

declare(strict_types=1);

class HomeController
{
    public function index(): void
    {
        include 'views/include/header.view.php';
        include 'views/index.view.php';
        include 'views/include/footer.view.php';
    }
}