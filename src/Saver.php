<?php

declare(strict_types=1);

namespace FileConverter;

use FileConverter\CSV\CSVSaver;
use FileConverter\JSON\JSONSaver;
use FileConverter\XML\XMLSaver;
use Prophecy\Exception\InvalidArgumentException;

class Saver
{
    public function saveFileInFormat(array $contain, string $output_format, string $output_file_path):void
    {
        $saver = $this->getSaver($output_format);
        $saver->saveArrayInFile($contain, $output_file_path);
    }

    private function getSaver(string $output_format): iSaver
    {
        if ($output_format == "json"){
            return new JSONSaver();
        } elseif ($output_format == "xml"){
            return new XMLSaver();
        } elseif ($output_format == "csv"){
            return new CSVSaver();
        } else{
            throw new InvalidArgumentException("Unsupported type of output file");
        }
    }
}