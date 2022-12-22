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

        include 'app/views/include/header.view.php';
        include 'app/views/hike.view.php';
        include 'app/views/include/footer.view.php';
    }

    public function showByTag(string $idTag): void
    {
        if (empty($idTag)) {
            throw new Exception("Tag ID was not provided.");
        }

        $HikesByTag = $this->hikeModel->findByTag($idTag);

        include 'app/views/include/header.view.php';
        include 'app/views/hikeByTag.view.php';
        include 'app/views/include/footer.view.php';
    }

    public function showCreate() {  
        
        include 'app/views/include/header.view.php';
        include 'app/views/createHike.view.php';
        include 'app/views/include/footer.view.php';
    }

    public function create(array $input) : void
    {

        if(empty($input['name']) || empty($input['distance']) || empty($input['duration']) || empty($input['elevation']) || empty($input['description'])){
            throw new Exception('Form data not validated.');
        }

        $name = htmlspecialchars($input['name']);
        $date = date("Y-n-j");
        $distance = htmlspecialchars($input['distance']);
        $duration = htmlspecialchars($input['duration']);
        $elevation = htmlspecialchars($înput['elevation']);
        $description = htmlspecialchars($input['description']);
        $update = date("Y-n-j");

        $this->hikeModel->create($name, $distance, $duration, $elevation, $description);

        http_response_code(302);
        header('Location: /');
    }
}