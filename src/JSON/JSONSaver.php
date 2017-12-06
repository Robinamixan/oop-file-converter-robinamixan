<?php
/**
 * Created by PhpStorm.
 * User: robinam
 * Date: 06.12.17
 * Time: 17:21
 */

namespace FileConverter\JSON;


class JSONSaver
{
    public static function save(array $contain, string $outputFilePath): void
    {
        $fp = fopen($outputFilePath, "w");
        fwrite($fp, json_encode($contain));
        fclose($fp);
    }
}