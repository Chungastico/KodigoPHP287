<?php
class Solution {
    function heightChecker($heights) {
        $expected = $heights;
        sort($expected);
        $mismatches = 0;
        $n = count($heights);
        for ($i = 0; $i < $n; $i++) {
            if ($heights[$i] !== $expected[$i]) {
                $mismatches++;
            }
        }
        return $mismatches;
    }
}

$solution = new Solution();
$tests = [
    [1,1,4,2,1,3],
    [5,1,2,3,4],
    [1,2,3,4,5]
];

foreach ($tests as $heights) {
    echo '[' . implode(', ', $heights) . ']: ';
    echo $solution->heightChecker($heights) . PHP_EOL;
}
