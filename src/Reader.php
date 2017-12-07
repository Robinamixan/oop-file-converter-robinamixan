<?php

declare(strict_types=1);

namespace FileConverter;

use FileConverter\CSV\CSVReader;
use FileConverter\JSON\JSONReader;
use FileConverter\XML\XMLReader;

class Reader
{
    public static function loadFile(\SplFileObject $file): array
    {
        $type = $file->getExtension();
        if ($type == "json"){
            return JSONReader::getContain($file);
        } elseif ($type == "xml"){
            return XMLReader::getContain($file);
        } elseif ($type == "csv"){
            return CSVReader::getContain($file);
        } else{
            echo "необрабатываемый формат";
            return [];
        }
    }
}