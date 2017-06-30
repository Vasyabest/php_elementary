<?php
$obj1 = (object) array('min' => 5, 'max' => 100);
$obj2 = (object) array('length' => 10);

function fiboMaxMin($context){
    $fiboElement = 1;
    $previosFiboElement = 0;
    $result = array();
    while ($fiboElement<$context->max) {
        if ($fiboElement>=$context->min){
            array_push($result, $fiboElement);
        }
        $newElement = $previosFiboElement + $fiboElement;
        $previosFiboElement = $fiboElement;
        $fiboElement = $newElement;
    }
    return $result;
}

function fiboLength($context){
    $i=1;
    $fiboElement = 1;
    $previosFiboElement = 0;
    $result = array();
    while ($i){
        if (strlen($fiboElement)==$context->length){
            array_push($result, $fiboElement);
        }
        elseif (strlen($fiboElement)>$context->length){
            $i=0;
        }
        $newElement = $previosFiboElement + $fiboElement;
        $previosFiboElement = $fiboElement;
        $fiboElement = $newElement;
    }
    return $result;
}

function main($context){
    if (array_key_exists('max', $context)){
        $result=fiboMaxMin($context);
    }
    elseif (array_key_exists('length', $context)){
        $result=fiboLength($context);
    }
    return $result;
}

$result=main($obj2);
for ($i=0; $i<count($result);$i++){
    echo $result[$i];
    echo '<br>';
}
?>