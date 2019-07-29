<?php
/*You are given an array (which will have a length of at least 3, but could be very large)
containing integers. The array is either entirely comprised of odd integers or entirely
comprised of even integers except for a single integer N.
Write a method that takes the array as an argument and returns this "outlier" N.
[2, 4, 0, 100, 4, 11, 2602, 36]
Should return: 11 (the only odd number)
*/

$integers = [2, 4, 0, 100, 4, 11, 2602, 36];
function find($integers)
{
    if (array_sum($integers) % 2 == 1) {
        oddIntegers($integers);
    } else {
        evenIntegers($integers);
    }
}

function oddIntegers($integers)
{ // функция поиска нечетных целых чисел
    for ($i = 0; $i < count($integers); $i++) {
        if ($integers[$i] % 2 == 1) {
            echo $integers[$i];
        }
    }
}

function evenIntegers($integers)
{  // функция поиска четных целых чисел
    for ($i = 0; $i < count($integers); $i++) {
        if ($integers[$i] % 2 == 0) {
            echo $integers[$i];
        }
    }
}

find($integers);