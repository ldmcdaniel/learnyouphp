<?php

$testFile = $argv[1];

$content = file_get_contents($testFile);

$lines = explode("\n", $content);

print count($lines);