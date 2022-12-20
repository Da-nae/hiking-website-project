<?php

class AuthController
{
    private AuthModel $authModel;

    public function __construct()
    {
        $this->authModel = new AuthModel();
    }

    public function login(array $input): void
    {
        if (empty($input['nickname']) ||  empty($input['password'])) {
            throw new Exception('Form data not validated.');
        }

        $username = htmlspecialchars($input['nickname']);
        $password = htmlspecialchars($input['password']);

        $user = $this->authModel->find($username);

        if(!password_verify($password, $user['password']))
        {
            throw new Exception('Failed login attempt : wrong password');
        }
        
        // What is storred in the cookie of the user : 
        $_SESSION['user'] = [
            'id' => $user['id'],
            'username' => $user['nickname'],
            'email' => $user['email'],
            'loggedIn'=> true
        ];

        // Then, we redirect to the home page :
        http_response_code(302);
        header('location: /');
    }

    public function register(array $input): void
    {
        if (empty($input['nickname']) || empty($input['email']) || empty($input['password'])) {
            throw new Exception('Form data not validated.');
        }

        $nickname = htmlspecialchars($input['nickname']);
        $firstname = htmlspecialchars($input['firstname']);
        $lastname = htmlspecialchars($input['lastname']);
        $email = filter_var($input['email'], FILTER_SANITIZE_EMAIL);
        $password = password_hash($input['password'], PASSWORD_DEFAULT);


        $this->authModel->create($nickname, $lastname, $firstname, $email, $password);

        $id = $this->authModel->getLastInsertId();

        // What is storred in the cookie of the user : 
        $_SESSION['user'] = [
            'id' => $id,
            'username' => $nickname,
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
        include 'app/views/registrationForm.view.php';
    }

    public function showLoginForm(): void
    {
        include 'app/views/loginForm.view.php';
    }
}