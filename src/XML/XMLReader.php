<?php
/**
 * Created by PhpStorm.
 * User: robinam
 * Date: 06.12.17
 * Time: 12:18
 */

namespace FileConverter\XML;

class XMLReader
{
    public static function get_contain(\SplFileObject $file): array
    {
        $cont = file_get_contents($file->getPathname());
        $xml = simplexml_load_string($cont, "SimpleXMLElement");
        $json = json_encode($xml);
        $array = json_decode($json,TRUE);
        return $array;
    }
}