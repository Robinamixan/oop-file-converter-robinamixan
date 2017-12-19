<?php
/**
 * Created by PhpStorm.
 * User: robinam
 * Date: 06.12.17
 * Time: 17:21
 */

namespace FileConverter\JSON;


use FileConverter\iSaver;

class JSONSaver implements iSaver
{
    public function saveArrayInFile(array $contain, string $outputFilePath): void
    {
        $file = fopen($outputFilePath, "w");
        fwrite($file, json_encode($contain));
        fclose($file);
    }
}