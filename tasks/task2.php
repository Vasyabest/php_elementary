<?php

    $list1 = (object) array('a' => 20, 'b' => 23);
    $list2 = (object) array('c' => 34, 'd' => 15);

    function checkLists ($list1, $list2) {
        //check on float and int.
        if (gettype($list1->a) !== 'float' && gettype($list1->a) !== 'integer') {
            echo 'Sorry, you entered wrong parameter a... ';
            return 0;
        }

        if (gettype($list1->b) !== 'float' && gettype($list1->b) !== 'integer') {
            echo 'Sorry, you entered wrong parameter b... ';
            return 0;
        }

        if (gettype($list2->c) !== 'float' && gettype($list2->c) !== 'integer') {
            echo 'Sorry, you entered wrong parameter c... ';
            return 0;
        }

        if (gettype($list2->d) !== 'float' && gettype($list2->d) !== 'integer') {
            echo 'Sorry, you entered wrong parameter d... ';
            return 0;
        }


        if (($list1->a - $list2->c  < 0 && $list1->b - $list2->d < 0) || ($list1->a - $list2->c  < 0 && $list1->b - $list2->d < 0) ) {
            echo '1';
        }

        elseif (($list1->a - $list2->c  > 0 && $list1->b - $list2->d > 0) || ($list1->a - $list2->c  > 0 && $list1->b - $list2->d > 0) ){
            echo '2';
        }

        else {
            echo '0';
        }
    }

    checkLists($list1, $list2);
?>