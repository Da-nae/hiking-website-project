<?php

declare(strict_types=1);

class AuthModel extends Database 
{
    public function create(string $nickname, string $firstname, string $lastname, string $email, string $password)
    {

        if (!$this->query(
            "INSERT INTO users(nickname, firstname, lastname, email, password) VALUES (?, ?, ?, ?, ?)",
            [
                $nickname,
                $firstname,
                $lastname,
                $email,
                $password
            ]
        )) {
            throw new Exception('Error during registration.');
        }
    }

    public function find(string $nickname): array
    {
        $user = $this->query(
            "SELECT * FROM users WHERE nickname = ?",
            [
                $nickname
            ]
        )->fetch();

        if(!$user) {
            throw new Exception('Failed login attempt');
        }

        return $user;
    }

    public function showUser(string $userID): array|false
    {
        try {
            return $this->query(
                'SELECT * FROM users WHERE ID_users = ?',
                [
                    $userID
                ]
            )->fetch();

        } catch (Exception $e) {
            echo $e->getMessage();
            return [];
        }
    }
}