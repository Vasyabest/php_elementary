<?php
require_once 'tasks/task1Class.php';
require_once 'tasks/task2.php';
require_once 'tasks/task3.php';
require_once 'tasks/task4.php';
require_once 'tasks/task5.php';

$task1 = new ChessBoard(11, 12, "*");
echo $task1->resolveAsString();




?>
