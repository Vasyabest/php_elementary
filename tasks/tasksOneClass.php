<?php

abstract class Task
{

    abstract protected function run();
    abstract protected function isValid();
    abstract protected function validate();

    public function resolveAsString()
    {
        $this->validate();

        if (!$this->isValid()) {
            return $this->error;
        } else {
            return $this->run();
        }
    }


}

class ChessBoard extends Task
{
    protected $width;
    protected $height;
    protected $symbol;

    const space = "&nbsp";
    const newRow = "<br>";

    public function __construct($width, $height, $symbol)
    {
        $this->width = $width;
        $this->height = $height;
        $this->symbol = $symbol;
    }


    protected function validate()
    {
        $this->isValid = true;
        $this->error = '';

        if (!is_int($this->width)) {
            $this->error = "You have to enter only integer number for width";
        } elseif (!is_int($this->height)) {

            $this->error = "You have to enter only integer number for height";
        } elseif ($this->width < 0) {

            $this->error = "You have to enter width more than 0";
        } elseif ($this->height < 0) {

            $this->error = "You have to enter height more than 0";
        }

        if ($this->error != "") {
            $this->isValid = false;
        }
    }

    protected function isValid()
    {

        return $this->isValid;
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

$task1 = new ChessBoard(-17, 19, "*");
echo $task1->resolveAsString();

?>