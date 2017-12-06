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
        $contain = Reader::load_file($file);
        Saver::save_file_in_format($contain, $outputFormat, $outputFilePath);
    }
}
