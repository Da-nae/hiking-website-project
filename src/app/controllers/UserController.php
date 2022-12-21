<?php
declare(strict_types=1);

class UserController
{
    private Users $userModel;

    public function __construct()
    {
        $this->userModel = new Users();
    }

    public function showUser($userID): void
    {
        $user = $this->userModel->find($userID);

        include 'app/views/include/header.view.php';
        include 'app/views/user.view.php';
        include 'app/views/include/footer.view.php';
    }
}