<?php
/**
 * Created by PhpStorm.
 * User: robinam
 * Date: 06.12.17
 * Time: 12:18
 */

namespace FileConverter\XML;

class XMLreader
{
    public static function get_contain(\SplFileObject $file):array
    {
        $cont = simplexml_load_file($file->getPathname());
        $xml = simplexml_load_string($cont->asXML(), "SimpleXMLElement", LIBXML_NOCDATA);
        $json = json_encode($xml);
        $array = json_decode($json,TRUE);
        return $array;
    }
}