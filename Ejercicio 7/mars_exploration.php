<?php

$s = "SOSSOSSOS";

function countErrors($string) {
    $errors = 0;
    $count = 1;

    for($i = 0;$i < strlen($string);$i++ ){
        switch($count){
            case 1:
                if($string[$i] != "S"){
                    $errors += 1;
                }
                $count +=1;
                break;
            case 2:
                if($string[$i]!= "O"){
                    $errors += 1;
                }
                $count +=1;
                break;
            case 3:
                if($string[$i] != "S"){
                    $errors += 1;
                }
                $count =1;
                break;
        }
    }

    return $errors;
}

echo countErrors($s);

?>