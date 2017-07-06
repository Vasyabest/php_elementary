<?php

abstract class Task
{

    abstract protected function run();

    abstract protected function isValid();

    abstract protected function validate();

    public function resolveAsString()
    {
        if ($this->validate()) {
            return $this->validate();
        } else {
            return $this->run();
        }
    }


}

class ChessBoard extends Task
{
    var $width;
    var $height;
    var $symbol;

    const space = "&nbsp";
    const newRow = "<br>";

    function __construct($width, $height, $symbol)
    {
        $this->width = $width;
        $this->height = $height;
        $this->symbol = $symbol;
    }

    protected function isValid()
    {
        if (is_int($this->width) && is_int($this->height) && ($this->width > 0) && ($this->height > 0)) {
            return true;
        } else {
            return false;
        }
    }

    protected function validate()
    {
        if (!$this->isValid()) {
            if (!is_int($this->width)) {
                return "You have to enter only integer number for width";
            } elseif (!is_int($this->height)) {
                return "You have to enter only integer number for height";
            } elseif ($this->width < 0) {
                return "You have to enter width more than 0";
            } elseif ($this->height < 0) {
                return "You have to enter height more than 0";
            }
        } else {
            return false;
        }
    }

    protected function run()
    {

        $this->chess_board = "";
        for ($i = 0; $i < $this->width; $i++) {
            for ($j = 0; $j < $this->height; $j++) {
                if (($i % 2) == 0) {
                    $this->chess_board = $this->chess_board . $this->symbol . self::space;
                } elseif (($i % 2) == 1) {
                    $this->chess_board = $this->chess_board . self::space . $this->symbol;
                }
            }
            $this->chess_board = $this->chess_board . self::newRow;
        }
        return $this->chess_board;
    }
}

$task1 = new ChessBoard(5, 6, "*");
echo $task1->resolveAsString();

?>