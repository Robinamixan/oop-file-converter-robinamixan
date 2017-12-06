<?php

declare(strict_types=1);

namespace FileConverter;

use FileConverter\CSV\CSVreader;
use FileConverter\JSON\JSONreader;
use FileConverter\XML\XMLreader;

class Reader
{
    public static function choose_format(\SplFileObject $file):array
    {
        $type = $file->getExtension();
        if ($type == "json"){
            return JSONreader::get_contain($file);
        } elseif ($type == "xml"){
            return XMLreader::get_contain($file);
        } elseif ($type == "csv"){
            return CSVreader::get_contain($file);
        } else{
            echo "необрабатываемый формат";
            return [];
        }
    }
}