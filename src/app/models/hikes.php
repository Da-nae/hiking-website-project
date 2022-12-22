<?php

class Hikes extends Database
{
    public function findAll(): array|false
    {
        try {
            return $this->query(
                'SELECT * FROM hikes'
            )->fetchAll();

        } catch (Exception $e) {
            echo $e->getMessage();
            return [];
        }
    }

    public function find(string $code): array|false
    {
        try {
            return $this->query(
                'SELECT * FROM hikes WHERE ID_hikes = ?',
                [
                    $code
                ]
            )->fetch();

        } catch (Exception $e) {
            echo $e->getMessage();
            return [];
        }
    }

    public function findTag(string $code): array|false
    {
        try {
            return $this->query(
                'SELECT tag.tag_name FROM tagsList tag JOIN Hikes_Tags ht ON ht.ID_Tags = tag.ID_tags JOIN hikes hi ON hi.ID_hikes = ht.ID_hikes WHERE hi.ID_hikes = ?',
                [
                    $code
                ]
            )->fetchAll();

        } catch (Exception $e) {
            echo $e->getMessage();
            return [];
        }
    }

    public function findAuthor(string $code): array|false
    {
        try {
            return $this->query(
                'SELECT us.firstname, us.lastname FROM hikes hi JOIN users us ON us.ID_users = hi.ID_users WHERE hi.ID_hikes = ?',
                [
                    $code
                ]
            )->fetch();

        } catch (Exception $e) {
            echo $e->getMessage();
            return [];
        }
    }

    public function findByTag(string $idTag): array|false
    {
        try {
            return $this->query(
                'SELECT * FROM hikes hi JOIN Hikes_Tags ht ON hi.ID_hikes = ht.ID_hikes JOIN tagsList tag ON ht.ID_Tags = tag.ID_tags WHERE tag.ID_tags = ?',
                [
                    $idTag
                ]
            )->fetchAll();

        } catch (Exception $e) {
            echo $e->getMessage();
            return [];
        }
    }
}