<?php
/**
 * Created by PhpStorm.
 * User: robinam
 * Date: 06.12.17
 * Time: 12:18
 */

namespace FileConverter\CSV;

use SebastianBergmann\CodeCoverage\Node\File;

class CSVreader
{
    public static function get_contain(\SplFileObject $file):array
    {
        $contain = array_map('str_getcsv', file($file->getPathname()));
        return $contain;
    }
}