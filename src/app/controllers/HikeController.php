<?php
declare(strict_types=1);

class HikeController
{
    private Hikes $hikeModel;

    public function __construct()
    {
        $this->hikeModel = new Hikes();
    }

    public function index(): void
    {
        $hikes = $this->hikeModel->findAll();

        include 'views/includes/header.view.php';
        include 'views/index.view.php';
        include 'views/includes/footer.view.php';
    }

    public function show(string $code): void
    {
        if (empty($code)) {
            throw new Exception("Hike ID was not provided.");
        }

        $hikes = $this->hikeModel->find($code);

        include 'views/includes/header.view.php';
        include 'views/hike.view.php';
        include 'views/includes/footer.view.php';
    }
}