<?php
    // PHP program for implementation
    // of selection sort
    function selectionSort(&$arr, $n) {
        for ($i = 0; $i < $n; $i++) { 
            $low = $i;
            for ($j = $i; $j < $n; $j++) { 
                if ($arr[$j] < $arr[$low]) {
                    $low = $j;
                }
            }

            // swap the minimum value to $ith node
            if ($arr[$i] > $arr[$low]) {
                $tmp = $arr[$i];
                $arr[$i] = $arr[$low];
                $arr[$low] = $tmp;
            }
        }
    }

    // Driver Code
    $arr = [64, 25, 12, 22, 11];
    selectionSort($arr, count($arr));
    echo "SORTED ARRAY : \n";
    for ($i = 0; $i < count($arr); $i++) { 
        echo $arr[$i]." ";
    }
