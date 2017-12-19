<?php

namespace FileConverter\CSV;


use FileConverter\iSaver;

class CSVSaver implements iSaver
{
    public function saveArrayInFile(array $contain, string $output_file_path): void
    {
        $file = fopen($output_file_path, 'w');
        foreach($contain as $row) {
            fputcsv($file, $row);
        }
        fclose($file);
    }
}