<?php

require_once __DIR__ . '/mymodule.php';

$myFilter = new DirectoryFilter();

$returnedArray = $myFilter->filterFiles($argv[1], $argv[2]);

print implode(PHP_EOL, $returnedArray) . PHP_EOL;