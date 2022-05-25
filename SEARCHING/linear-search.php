<?php
    function search($arr, $x) {
        for ($i = 0; $i < sizeof($arr); $i++) {
            if ($arr[$i] == $x) {
                return $i;
            }
        }
        return -1;
    }

    $arr = [2, 3, 4, 10, 20];
    $x = 4;
    $result = search($arr, $x);

    if ($result == -1) {
        echo "ELEMENT NOT FOUND";
    } else {
        echo "ELEMENT IS PRESENT IN INDEX ", $result;
    }
?>