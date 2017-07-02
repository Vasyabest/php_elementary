<?php
//incoming objects
/*
$obj1 = (object)array('min' => 5, 'max' => 100);
$obj2 = (object)array('length' => -10);
*/
function fibo($context) {
    if (checking($context) === true) {
        if (array_key_exists('max', $context)) {
            $result = fiboMaxMin($context);
        } elseif (array_key_exists('length', $context)) {
            $result = fiboLength($context);
        }
    } else {
        $result = checking($context);
    }

    return $result;
}

function checking ($context) {
    if (!(array_key_exists('max', $context) && array_key_exists('min', $context)) && (!array_key_exists('length', $context))) { //case empty field
        $result = (object)array('status' => 'failed', 'reason' => 'You didint enter anything');
    } elseif (array_key_exists('max', $context) && array_key_exists('min', $context)) {  //case with max and min
        if (!(($context->max > 0) && ($context->min > 0) && ($context->max > $context->min))) {
            $result = (object)array('status' => 'failed', 'reason' => 'Numbers have to be more than 0 and max more than min');
        } elseif ((!is_int($context->max)) || (!is_int($context->min))) {
            $result = (object)array('status' => 'failed', 'reason' => 'You have to put only integer numbers');
        } else {
            $result = true;
        }

    } elseif (array_key_exists('length', $context)) { //case with length
        if (!is_int($context->length)) {
            $result = (object)array('status' => 'failed', 'reason' => 'You have to put only integer length');
        }
        if ($context->length <= 0) {
            $result = (object)array('status' => 'failed', 'reason' => 'You have to put length only  more than 0');
        } else {
            $result = true;
        }

    }

    return $result;
}

function fiboMaxMin ($context) {
    $fiboElement = 1;
    $previosFiboElement = 0;
    $result = array();

    while ($fiboElement < $context->max) {
        if ($fiboElement >= $context->min) {
            array_push($result, $fiboElement);
        }

        $newElement = $previosFiboElement + $fiboElement;
        $previosFiboElement = $fiboElement;
        $fiboElement = $newElement;
    }

    return $result;
}

function fiboLength ($context) {
    $i = 1;
    $fiboElement = 1;
    $previosFiboElement = 0;
    $result = array();

    while ($i) {
        if (strlen($fiboElement) === $context->length) {
            array_push($result, $fiboElement);
        } elseif (strlen($fiboElement) > $context->length) {
            $i = 0;
        }

        $newElement = $previosFiboElement + $fiboElement;
        $previosFiboElement = $fiboElement;
        $fiboElement = $newElement;
    }

    return $result;
}
//uncomment if you need tocheck 1st part when you need check correct variebles, 2nd for incorrect vars
/*
$result = fibo($obj2);

for ($i = 0; $i < count($result); $i++) {
    echo $result[$i];
    echo '<br>';
}*/

//echo $result->reason;

?>