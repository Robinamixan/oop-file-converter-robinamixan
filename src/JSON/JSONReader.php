<?php
/**
 * Created by PhpStorm.
 * User: robinam
 * Date: 06.12.17
 * Time: 12:18
 */

namespace FileConverter\JSON;

use FileConverter\iReader;

class JSONReader implements iReader
{
    public function getContain(\SplFileObject $file): array
    {
        $contain = json_decode($file, true);
        return $contain;
    }
}