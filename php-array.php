<?php

function abc($a,$b)
{
    $arr = [10,20,30,40,50,60,70,80,90,100];

    // Check two integers passed to the function should be positive; if not, the function should return -1.
    if ($a < 0 || $b < 0) {
        return -1;
    }

    // Validate that the first integer is lower than the second integer. If not, the function should return 0.
    if ($a > $b) {
        return 0;
    }

    /* If the first integer is in the array, and the second is above 100, for example, 90 and 120, then the function
     should return the sum of those integers that are within the array and in between the range given. In this case,
     that would be 190.  */
    if ($a <= 100 && $b > 100) {
         $b = 100;
    }
    
    //If both integers are not found in the array, for example,110 and 120, the function should return 0.
    if ($a > 100 && $b > 100) {
        return 0;
    }

    $indexofa = array_search($a, $arr ,true);
    $indexofb = array_search($b, $arr ,true);

    $sum = 0;
    for($x = $indexofa; $x < $indexofb+1; $x++) {
         $sum = $sum+$arr[$x];
    }
    return $sum;
    
}

echo abc(10,30);

?>