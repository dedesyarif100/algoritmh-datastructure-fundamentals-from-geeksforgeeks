<?php
    // PHP program for implementation
    // of Bubble Sort
    function bubbleSort(&$arr) {
        // Traverse through all array elements
        for ($i = 0; $i < sizeof($arr); $i++) {
            $swapped = False;
            // Last i elements are already in place
            for ($j = 0; $j < sizeof($arr) - $i - 1; $j++) {
                // traverse the array from 0 to n-i-1
                // Swap if the element found is greater
                // than the next element
                if ($arr[$j] > $arr[$j + 1]) {
                    $t = $arr[$j];
                    $arr[$j] = $arr[$j + 1];
                    $arr[$j + 1] = $t;
                    $swapped = true;
                }
            }

            if ($swapped == False) {
                break;
            }
        }
    }

    // Driver code to test above
    $arr = [64, 34, 25, 12, 22, 11, 90];
    bubbleSort($arr);

    echo "SORTED ARRAY : \n";

    for ($i = 0; $i < sizeof($arr); $i++) { 
        echo $arr[$i]." ";
    }
?>