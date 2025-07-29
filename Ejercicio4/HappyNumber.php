<?php
class Solution {
    function isHappy($n) {
        $seen = [];
        while ($n !== 1 && !isset($seen[$n])) {
            $seen[$n] = true;
            $n = $this->nextNumber($n);
        }
        return $n === 1;
    }
    private function nextNumber($num) {
        $sum = 0;
        while ($num > 0) {
            $digit = $num % 10;
            $sum += $digit * $digit;
            $num = intdiv($num, 10);
        }
        return $sum;
    }
}

$solution = new Solution();
$examples = [19, 2];

foreach ($examples as $n) {
    echo $n . ': ' . ($solution->isHappy($n) ? 'true' : 'false') . PHP_EOL;
}
