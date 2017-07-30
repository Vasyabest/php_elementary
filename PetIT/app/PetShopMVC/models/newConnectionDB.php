<?php

class newConnectionDB
{
    public $pdo;
    public $dsn = 'mysql:host=localhost;dbname=it_company_db';
    public $user = 'root';
    public $password = '';

    public function __construct($host, $db, $user, $password)
    {
        $dsn = $this->dsn;
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