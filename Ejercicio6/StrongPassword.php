<?php

function minimumNumber($n, $password) {
    $digits   = '0123456789';
    $lower    = 'abcdefghijklmnopqrstuvwxyz';
    $upper    = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $specials = '!@#$%^&*()-+';

    $hasDigit   = false;
    $hasLower   = false;
    $hasUpper   = false;
    $hasSpecial = false;

    $length = strlen($password);

    for ($i = 0; $i < $length; $i++) {
        $c = $password[$i];

        if (strpos($digits, $c) !== false) {
            $hasDigit = true;
        }
        elseif (strpos($lower, $c) !== false) {
            $hasLower = true;
        }
        elseif (strpos($upper, $c) !== false) {
            $hasUpper = true;
        }
        elseif (strpos($specials, $c) !== false) {
            $hasSpecial = true;
        }
    }

    $missingTypes = 0;
    if (! $hasDigit)   $missingTypes++;
    if (! $hasLower)   $missingTypes++;
    if (! $hasUpper)   $missingTypes++;
    if (! $hasSpecial) $missingTypes++;

    $minLength = 6;

    $missingLength = ($length < $minLength) ? ($minLength - $length) : 0;

    return max($missingTypes, $missingLength);
}


echo minimumNumber(3, "Ab1") . "\n";              
echo minimumNumber(11, "#HackerRank") . "\n";      
