<?php
/**
 * Created by PhpStorm.
 * User: robinam
 * Date: 06.12.17
 * Time: 12:18
 */

namespace FileConverter\CSV;

use FileConverter\iReader;

class CSVReader implements iReader
{
    public function getContain(\SplFileObject $file): array
    {
        $contain = array_map('str_getcsv', file($file->getPathname()));
        return $contain;
    }
}