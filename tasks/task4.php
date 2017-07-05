<?php

$obj = (object)array('min' => 15000.4, 'max' => 150000);

function checkValidate($context){
    if (!(array_key_exists('min', $context) && array_key_exists('min', $context))){
        $result = (object)array('status' => 'failed', 'reason' => 'You have to enter min and max numbers');
    }elseif ((gettype($context->min) !== 'integer') || (gettype($context->max) !== 'integer')) {
        $result = (object)array('status' => 'failed', 'reason' => 'You have to enter only integer numbers...');
    }elseif (($context->min<0)||($context->max<0)) {
        $result = (object)array('status' => 'failed', 'reason' => 'You have to enter only integer numbers more than 0');
    }elseif (($context->min>$context->max)){
        $result = (object)array('status' => 'failed', 'reason' => 'You have to enter max number bigger than min');
    }else{
        $result = true;
    }

    return $result;
}

function check($ticket) //function return digit in string type and add "0" in start if it need
{
    if (strlen(strval($ticket)) < 6) { //check if ticket shorter than 6 digits
        $digits = 6 - strlen(strval($ticket));
        $d_null = "0";
        $ticket = strval($ticket);

        for ($i = 0; $i < $digits; $i++) {
            $ticket = $d_null . $ticket;
        }
        $result = $ticket; //return string ticket with a 0 before
    } else {
        $result = strval($ticket);
    }
    return $result;   //return string ticket if ticket was 6digitals
}


function simple($ticket)   //checking if the number
{
    $arr = str_split($ticket, 3); //get array with a 1st and 2nd part of digit
    //make 1st and 2nd part of ticket - arrays
    $first_part = str_split($arr[0]);
    $second_part = str_split($arr[1]);
    //counting sum of digits in arrays
    $first_sum = 0;
    $second_sum = 0;

    for ($i = 0; $i < 3; $i++) {
        $first_sum += intval($first_part[$i]);
        $second_sum += intval($second_part[$i]);
    }

    if ($first_sum === $second_sum) {
        $result = 1;
    } else {
        $result = 0;
    }
    return $result;
}

function complex($ticket)
{
    $ticket = check($ticket);
    $arr = str_split($ticket);

    $summEven = 0;
    $summOdd = 0;

    for ($i = 0; $i < 6; $i++) {
        if (intval($arr[$i]) % 2 == 0) {
            $summEven += $arr[$i];
        } else {
            $summOdd += intval($arr[$i]);
        }
    }

    if ($summEven === $summOdd) {
        $result = 1;
    } else {
        $result = 0;
    }
    return $result;
}


function countSimple($min, $max)
{
    $result = 0;
    for ($i = $min; $i <= $max; $i++) {
        $i = check($i);
        $result += simple($i);
    }

    return $result;
}

function countComplex($min, $max)
{
    $result = 0;
    for ($i = $min; $i <= $max; $i++) {
        $i = check($i);
        $result += complex($i);
    }

    return $result;
}

function method($minMax)
{
    $result = checkValidate($minMax);
    if ($result === true) {
        $simpleTickets = countSimple($minMax->min, $minMax->max);
        $complexTickets = countComplex($minMax->min, $minMax->max);

        if ($simpleTickets > $complexTickets) {
            $result = (object)array('info' => "Simple method has won", 'simple' => $simpleTickets, 'complex' => $complexTickets);
        } elseif ($simpleTickets < $complexTickets) {
            $result = (object)array('info' => "Complex method has won", 'simple' => $simpleTickets, 'complex' => $complexTickets);
        } else {
            $result = (object)array('info' => "It was a draw", 'simple' => $simpleTickets, 'complex' => $complexTickets);
        }

        echo $result->info;
        echo '</br>';
        echo $result->simple;
        echo '</br>';
        echo $result->complex;
        echo '</br>';

    }
    return $result;
}


echo method($obj)->reason;
?>