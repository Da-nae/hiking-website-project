<?php

class Tags extends Database
{
    public function findAllTag(): array|false
    {
        try {
            return $this->query(
                'SELECT * FROM tagsList'
            )->fetchAll();

        } catch (Exception $e) {
            echo $e->getMessage();
            return [];
        }
    }
}