<?php

declare(strict_types=1);

namespace FileConverter;

use FileConverter\CSV\CSVSaver;
use FileConverter\JSON\JSONSaver;
use FileConverter\XML\XMLSaver;

class Saver
{
    public static function saveFileInFormat(array $contain, string $outputFormat, string $outputFilePath):void
    {
        if ($outputFormat == "json"){
            JSONSaver::save($contain, $outputFilePath);
        } elseif ($outputFormat == "xml"){
            XMLSaver::save($contain, $outputFormat, $outputFilePath);
        } elseif ($outputFormat == "csv"){
            CSVSaver::save($contain, $outputFilePath);
        } else {
            echo "необрабатываемый формат";
        }
    }
}