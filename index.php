<?php
$lines = readline('enter triangle row count ...  ');
for ($i = 1; $i <= $lines; $i++) {
    $shape = '';
    for ($b = $i; $b > 0 ; $b--) {
        $shape = $shape . '*';
    }
    echo $shape . PHP_EOL;
}
