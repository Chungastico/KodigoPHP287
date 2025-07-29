<?php

$input = [-1,0,3,4,9,12,15];

function findNumber($myArray,$target,$start = 0 ,$end="" ){
    if($end == ""){
        $end = count($myArray) -1;
    }

    if($start > $end) return -1;

    $halfNumber = floor(($end + $start)/2);

    if($myArray[$halfNumber] == $target){
        return $halfNumber;
    }
    if($target < $myArray[$halfNumber]){
        return findNumber($myArray,$target,$start,$halfNumber - 1);
    }
    if($target > $myArray[$halfNumber] ){
        return findNumber($myArray,$target,$halfNumber + 1,$end);
    }
}

echo findNumber($input,15);

?>