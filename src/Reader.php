<?php

declare(strict_types=1);

namespace FileConverter;

use FileConverter\CSV\CSVReader;
use FileConverter\JSON\JSONReader;
use FileConverter\XML\XMLReader;

class Reader
{
    public static function load_file(\SplFileObject $file): array
    {
        $type = $file->getExtension();
        if ($type == "json"){
            return JSONReader::get_contain($file);
        } elseif ($type == "xml"){
            return XMLReader::get_contain($file);
        } elseif ($type == "csv"){
            return CSVReader::get_contain($file);
        } else{
            echo "необрабатываемый формат";
            return [];
        }
    }
}