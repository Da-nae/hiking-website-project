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
}