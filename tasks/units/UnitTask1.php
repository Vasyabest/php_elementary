<?php
require '../tasks/task1Class.php';


class Unit1Tests extends PHPUnit_Framework_TestCase
{
    private $chessBoard;

    public function addDataProvider() {
        return array(
            array(4,5,"*","*&nbsp*&nbsp*&nbsp*&nbsp*&nbsp</br>&nbsp*&nbsp*&nbsp*&nbsp*&nbsp*</br>*&nbsp*&nbsp*&nbsp*&nbsp*&nbsp</br>&nbsp*&nbsp*&nbsp*&nbsp*&nbsp*</br>"),
            array(-17,19,"*","You have to enter width more than 0"),
            array(11,-5,"*","You have to enter height more than 0"),
            array(1,1,"*",'*&nbsp'),
            array(1.4,1,"*",'You have to enter only integer number for width'),
        );
    }

    /**
     * @dataProvider addDataProvider
     */
    public function testAdd($a, $b, $s, $expected)
    {
        $this->chessBoard = new ChessBoard($a, $b, $s);
        $result = $this->chessBoard->resolveAsString();
        $this->assertEquals($expected, $result);
    }

}
?>