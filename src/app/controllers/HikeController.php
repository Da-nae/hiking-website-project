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

    public function showByTag(string $idTag): void
    {
        if (empty($idTag)) {
            throw new Exception("Tag ID was not provided.");
        }

        $HikesByTag = $this->hikeModel->findByTag($idTag);

        include 'app/views/hikeByTag.view.php';
        include 'app/views/include/footer.view.php';
    }
}