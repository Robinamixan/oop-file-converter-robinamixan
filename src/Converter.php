<?php

declare(strict_types=1);

namespace FileConverter;

class Converter
{
    private $reader;
    private $saver;

    public function __construct()
    {
        $this->reader = new Reader();
        $this->saver = new Saver();
    }

    public function convert(\SplFileObject $file, string $output_format, string $output_file_path)
    {
        $contain = $this->reader->loadFile($file);
        $this->saver->saveFileInFormat($contain, $output_format, $output_file_path);
    }




}
