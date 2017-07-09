<?php
$w = 6;
$h = 8;
$s = "*";

function checkValidation($width, $height)
{

    if (is_int($width) && is_int($height) && ($width > 0) && ($height > 0)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function drawingBoard($width, $height, $s)
{
    $space = "&nbsp";
    $break = "</br>";

    $chess_board = "";
    for ($i = 0; $i < $width; $i++) {
        for ($j = 0; $j < $height; $j++) {
            if (($i % 2) == 0) {
                $chess_board = $chess_board . $s . $space;
            } elseif (($i % 2) == 1) {
                $chess_board = $chess_board . $space . $s;
            }

        }
        $chess_board = $chess_board . $break;
    }
    return $chess_board;
}


function startDrawing($width, $height, $s)
{
    if (!checkValidation($width, $height)) {
        $result = (object)array('status' => 'failed', 'reason' => 'You have to enter width and height more than 0');
    } else {
        $result = drawingBoard($width, $height, $s);
    }
    return $result;
}

/*echo(startDrawing($w, $h, $s));*/
?>

