<?php

foreach (new DirectoryIterator($argv[1]) as $file) {
    if ($file->getExtension() == $argv[2]) {
        print $file->getFilename() . "\n";
    }
}