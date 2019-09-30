<?php
// Complete the compareTriplets function below.
function compareTriplets($a, $b) {
    $alice_points = 0;
    $bob_points = 0;
    for($i = 0; $i < 3; ++$i){
       if( $a[$i] > $b[$i] ) $alice_points++;
       if( $a[$i] < $b[$i] ) $bob_points++;
    }
    $arr = Array($alice_points, $bob_points);
    return $arr;
}
$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$a_temp = rtrim(fgets(STDIN));

$a = array_map('intval', preg_split('/ /', $a_temp, -1, PREG_SPLIT_NO_EMPTY));

$b_temp = rtrim(fgets(STDIN));

$b = array_map('intval', preg_split('/ /', $b_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = compareTriplets($a, $b);

fwrite($fptr, implode(" ", $result) . "\n");

fclose($fptr);