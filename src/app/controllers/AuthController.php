<?php

class AuthController
{
    private AuthModel $authModel;

    public function __construct()
    {
        $this->authModel = new AuthModel();
    }

    public function register(array $input): void
    {
        if (empty($input['username']) || empty($input['email']) || empty($input['password'])) {
            throw new Exception('Form data not validated.');
        }

        $username = htmlspecialchars($input['username']);
        $email = filter_var($input['email'], FILTER_SANITIZE_EMAIL);
        $password = password_hash($input['password'], PASSWORD_DEFAULT);


        $this->authModel->create($username, $email, $password);

        $id = $this->authModel->getLastInsertId();

        // What is storred in the cookie of the user : 
        $_SESSION['user'] = [
            'id' => $id,
            'username' => $username,
            'email' => $email,
            'loggedIn'=> true
        ];

        // Then, we redirect to the home page :
        http_response_code(302);
        header('location: /');

    }

    public function logout(): void
    {
        unset($_SESSION['user']);

        header('location: /');
    }

    public function showRegistrationForm(): void
    {
        include 'views/include/footer.view.php';
        include 'views/registrationForm.php';
        include 'views/include/footer.view.php';
    }
}