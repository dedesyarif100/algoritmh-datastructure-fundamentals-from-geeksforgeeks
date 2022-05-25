<?php
// function binarySearch($arr, $l, $r, $x) {
//     if ($r >= $l) {
//         $mid = ceil($l + ($r - $l) / 2);

//         if ($arr[$mid] == $x) {
//             return floor($mid);
//         }

//         if ($arr[$mid] > $x) {
//             return binarySearch($arr, $l, $mid - 1, $x);
//         }

//         return binarySearch($arr, $mid + 1, $r, $x);
//     }
//     return -1;
// }

// $arr = [2, 12, 3, 4, 10, 20];
// $x = 12;
// $result = binarySearch($arr, 0, count($arr) - 1, $x);
// if ($result == -1) {
//     echo "ELEMENT NOT FOUND";
// } else {
//     echo "ELEMENT FOUND AT INDEX ", $result;
// }

    function binarySearch($arr, $l, $r, $x)
    {
        while($l <= $r) {
            $mid = $l + ($r - $l) / 2;

            if ($arr[$mid] == $x) {
                return floor($mid);
            }

            if ($arr[$mid] < $x) {
                $l = $mid + 1;
            } else {
                $r = $mid - 1;
            }
        }
        return -1;
    }

    $arr = [2, 3, 4, 10, 12, 20];
    $x = 20;
    $result = binarySearch($arr, 0, count($arr) - 1, $x);
    if ($result == -1) {
        echo "ELEMENT NOT FOUND";
    } else {
        echo "ELEMENT FOUND AT INDEX ", $result;
    }
?>