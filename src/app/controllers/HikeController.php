<?php
declare(strict_types=1);


class HikeController
{
    private Hike $hikeTwo;

    public function __construct()
    {
        $this->hikeTwo = new Hike();
    }

    public function index(): void
    {
        $hike = $this->productModel->findAll();

        include 'views/includes/header.view.php';
        include 'views/index.view.php';
        include 'views/includes/footer.view.php';
    }

    public function show(string $code): void
    {
        if (empty($code)) {
            throw new Exception("Hike ID was not provided.");
        }

        $hike = $this->hikeTwo->find($code);

        include 'views/includes/header.view.php';
        include 'views/hike.view.php';
        include 'views/includes/footer.view.php';
    }
}