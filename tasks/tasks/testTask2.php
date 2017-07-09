<?php
require 'task2.php';

class Task1Tests extends PHPUnit_Framework_TestCase
{

    public function testAdd()
    {
        $env1 = (object) array('a' => 20, 'b' => 23);
        $env2 = (object) array('c' => 34, 'd' => 15);
        $desk1="0";
        $result1 = startComparing($env1, $env2);

        $env1 = (object) array('a' => 30, 'b' => 23.5);
        $env2 = (object) array('c' => 4, 'd' => 15);
        $desk2="1";
        $result2 = startComparing($env1, $env2);

        $env1 = (object) array('a' => 3, 'b' => 2.5);
        $env2 = (object) array('c' => 40, 'd' => 15);
        $desk3="2";
        $result3 = startComparing($env1, $env2);



        $this->assertEquals($desk1, $result1);
        $this->assertEquals($desk2, $result2);
        $this->assertEquals($desk3, $result3);
    }

}
?>