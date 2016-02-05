<?php

$total = 0;

for($i = 1; $i < count($argv); $i++) {
    $total += $argv[$i];
}

print $total;