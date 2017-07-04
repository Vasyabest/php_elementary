<?php
require 'task1.php';

class Task1Tests extends PHPUnit_Framework_TestCase
{

    public function testAdd()
    {
        $desk="*&nbsp*&nbsp*&nbsp*&nbsp*&nbsp</br>&nbsp*&nbsp*&nbsp*&nbsp*&nbsp*</br>*&nbsp*&nbsp*&nbsp*&nbsp*&nbsp</br>&nbsp*&nbsp*&nbsp*&nbsp*&nbsp*</br>";
        $result = startDrawing(4, 5, "*");
        $desk1="*&nbsp*&nbsp*&nbsp*&nbsp</br>&nbsp*&nbsp*&nbsp*&nbsp*</br>*&nbsp*&nbsp*&nbsp*&nbsp</br>&nbsp*&nbsp*&nbsp*&nbsp*</br>";
        $result1 = startDrawing(4, 4, "*");
        $this->assertEquals($desk, $result);
        $this->assertEquals($desk1, $result1);
    }

}
?>