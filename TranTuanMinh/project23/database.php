<?php
class Database {
    private $hostname = '127.0.0.1';
    private $username = 'root';
    private $password = 'himakevolution';
    private $dbname = 'project23';
    private $charset = 'utf8mb4';

    public $pdo = null;
    public function __construct()
    {
        $dsn = "mysql:host={$this->hostname};dbname={$this->dbname};charset={$this->charset}";
        try {
            $this->pdo = new PDO($dsn, $this->username, $this->password, [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES => false,
            ]);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo $e->getMessage();
            exit();
        }
    }

}