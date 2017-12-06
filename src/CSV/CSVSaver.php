<?php
/**
 * Created by PhpStorm.
 * User: robinam
 * Date: 06.12.17
 * Time: 15:35
 */

namespace FileConverter\CSV;


class CSVSaver
{
    public static function save(array $contain, string $outputFilePath): void
    {
        var_dump($contain);
        $fp = fopen($outputFilePath, 'w');
        foreach($contain as $row) {
            fputcsv($fp, $row);
        }
        fclose($fp);
    }
}