<?php

declare(strict_types=1);

namespace FileConverter;

use FileConverter\CSV\CSVReader;
use FileConverter\JSON\JSONReader;
use FileConverter\XML\XMLReader;
use Prophecy\Exception\InvalidArgumentException;

class Reader
{
    public function loadFile(\SplFileObject $file): array
    {
        $reader = $this->getReader($file->getExtension());
        return $reader->getContain($file);
    }

    private function getReader(string $input_format): iReader
    {
        if ($input_format == "json"){
            return new JSONReader();
        } elseif ($input_format == "xml"){
            return new XMLReader();
        } elseif ($input_format == "csv"){
            return new CSVReader();
        } else{
            throw new InvalidArgumentException("Unsupported type of input file");
        }
    }
}