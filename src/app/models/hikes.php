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