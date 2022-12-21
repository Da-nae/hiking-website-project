<?php

class Users extends Database
{

    public function find(string $userID): array|false
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