<?php

class DirectoryFilter
{
    public function filterFiles($directoryName, $filenameExtension)
    {
        return array_filter(scandir($directoryName), function ($file) use($filenameExtension) {
            return pathinfo($file, PATHINFO_EXTENSION) === $filenameExtension;
        });
    }
}