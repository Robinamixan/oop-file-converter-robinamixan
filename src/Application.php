<?php

declare(strict_types=1);

namespace FileConverter;

class Application
{
    public function run(string $filename, string $output_format, $output_file_path)
    {
        $converter = new Converter();

        $file = new \SplFileObject($filename, 'r');

        $converter->convert($file, $output_format, $output_file_path);
    }
}
