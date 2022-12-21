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

        include 'app/views/include/header.view.php';
        include 'app/views/index.view.php';
        include 'app/views/include/footer.view.php';
    }

    public function show(string $code): void
    {
        if (empty($code)) {
            throw new Exception("Hike ID was not provided.");
        }

        $hike = $this->hikeModel->find($code);

        include 'app/views/hike.view.php';
        include 'app/views/include/footer.view.php';
    }
}