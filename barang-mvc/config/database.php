<?php

class Database
{
    private string $host = 'localhost';
    private string $dbname = 'db_toko';
    private string $username = 'root';
    private string $password = '';

    public function getKoneksi(): PDO
    {
        return new PDO(
            "mysql:host={$this->host};dbname={$this->dbname};charset=utf8mb4",
            $this->username,
            $this->password,
            [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            ]
        );
    }
}
