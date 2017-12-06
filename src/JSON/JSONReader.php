<?php
/**
 * Created by PhpStorm.
 * User: robinam
 * Date: 06.12.17
 * Time: 12:18
 */

namespace FileConverter\JSON;

class JSONReader
{
    public static function get_contain(\SplFileObject $file): array
    {
        $contain = json_decode($file, true);
        return $contain;
    }
}