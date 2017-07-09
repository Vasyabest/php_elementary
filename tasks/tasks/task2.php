<?php

     function checkValidation ($env1, $env2)
    {
        if (gettype($env1->a) !== 'float' && gettype($env1->a) !== 'integer') {
            $result = (object)array('status' => 'failed', 'reason' => 'Sorry, you entered wrong parameter a...');
        }

        if (gettype($env1->b) !== 'float' && gettype($env1->b) !== 'integer') {
            $result = (object)array('status' => 'failed', 'reason' => 'Sorry, you entered wrong parameter b...');
        }

        if (gettype($env2->c) !== 'float' && gettype($env2->c) !== 'integer') {
            $result = (object)array('status' => 'failed', 'reason' => 'Sorry, you entered wrong parameter c...');
        }

        if (gettype($env2->d) !== 'float' && gettype($env2->d) !== 'integer') {
            $result = (object)array('status' => 'failed', 'reason' => 'Sorry, you entered wrong parameter d...');
        }

        else{
            $result = true;
        }
        return $result;
    }

    function comparisonOfEnvelopes($env1, $env2){

        if (($env1->a - $env2->c  < 0 && $env1->b - $env2->d < 0) || ($env1->a - $env2->c  < 0 && $env1->b - $env2->d < 0) ) {
            $result = 2;
        } elseif (($env1->a - $env2->c  > 0 && $env1->b - $env2->d > 0) || ($env1->a - $env2->c  > 0 && $env1->b - $env2->d > 0) ){
            $result = 1;
        } else {
            $result = 0;
        }

        return $result;
    }

    function startComparing($env1, $env2){
        $result = checkValidation ($env1, $env2);

        if ($result === true){
            $result = comparisonOfEnvelopes($env1, $env2);
        }
        return $result;
    }

?>