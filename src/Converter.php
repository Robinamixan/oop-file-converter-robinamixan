<?php

declare(strict_types=1);

namespace FileConverter;

class Converter
{
    public function __construct()
    {
    }

    public function convert(\SplFileObject $file, string $outputFormat, string $outputFilePath)
    {
        $contain = Reader::choose_format($file);
        var_dump($contain);
    }
}
