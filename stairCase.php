<?php
// Complete the staircase function below.
function staircase($n) {
    $a = "";
    for($i = 0; $i < 6; $i++){
        $a .= "#"; 
        echo $a."\n";
    }
}
$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

staircase($n);

fclose($stdin);