<?php

declare(strict_types=1);

class HomeController
{
    public function index(): void
    {
        include 'app/views/include/header.view.php';
        include 'app/views/index.view.php';
        include 'app/views/include/footer.view.php';
    }
}