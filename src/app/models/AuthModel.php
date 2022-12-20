<?php

declare(strict_types=1);

class AuthModel extends Database 
{
    public function create(string $username, string $email, string $password)
    {

        if (!$this->query(
            "INSERT INTO users(username, email, password) VALUES (?, ?, ?)",
            [
                $username,
                $email,
                $password
            ]
        )) {
            throw new Exception('Error during registration.');
        }
    }

    public function find(string $username): array
    {
        $user = $this->query(
            "SELECT * FROM users WHERE username = ?",
            [
                $username
            ]
        )->fetch();

        if(!$user) {
            throw new Exception('Failed login attempt');
        }
        
        return $user;
    }
}