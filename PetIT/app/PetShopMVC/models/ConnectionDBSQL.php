<?php

class ConnectionDBSQL
{
    public $pdo;
    public $dsn = 'mysql:host=localhost;dbname=pet_shop_db';
    public $user = 'root';
    public $password = '';
    

    public function __construct($dbName, $user, $password)
    {
        $dsn = 'mysql:host=localhost;dbname=' . $dbName;
        $user = $this->user;
        $password = $this->password;
        $this->pdo = new PDO($dsn, $user, $password);
    }

    public function selectAll($table, $where = null)
    {
        $sql = "SELECT * FROM `{$table}`";
        if ($where) {
            $sql .= ' WHERE ' . $where;
        }
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


}