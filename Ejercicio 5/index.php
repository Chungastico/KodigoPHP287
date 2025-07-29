<?php
    function birthdayCakeCandles($candles) {
        $length = count($candles);
        $num_max = 0;
        $cont = 0;
        
        foreach($candles as $candle) {
            if($candle > $num_max) {
                $num_max = $candle;
                $cont = 1;
            } else if ($candle == $num_max) {
                $cont++;
            }
        }        
        return $cont;
    }

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$candles_count = intval(trim(fgets(STDIN)));

$candles_temp = rtrim(fgets(STDIN));

$candles = array_map('intval', preg_split('/ /', $candles_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = birthdayCakeCandles($candles);

fwrite($fptr, $result . "\n");

fclose($fptr);
?>