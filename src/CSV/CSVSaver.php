<?php

namespace FileConverter\CSV;


class CSVSaver
{
    public static function save(array $contain, string $outputFilePath): void
    {
        $file = fopen($outputFilePath, 'w');
        foreach($contain as $row) {
            fputcsv($file, $row);
        }
        fclose($file);
    }
}