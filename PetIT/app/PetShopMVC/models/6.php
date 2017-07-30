<?php
require_once "ConnectionDBSQL.php";



$db = new ConnectionDBSQL('it_company_db', 'root', '');

$result = $db->selectAll('candidates');

var_dump($result);