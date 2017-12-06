<?php

namespace FileConverter\XML;


class XMLSaver
{
    public static function save(array $contain, string $outputFormat, string $outputFilePath): void
    {
        $file_name = basename($outputFilePath, '.' . $outputFormat);
        $xml_data = new \SimpleXMLElement('<?xml version="1.0"?><' . $file_name . '></' . $file_name . '>');
        XMLSaver::array_to_xml($contain, $xml_data);
        $xml_data->saveXML($outputFilePath);
    }

    private static function array_to_xml( $data, &$xml_data ) {
        foreach( $data as $key => $value ) {
            if( is_numeric($key) ){
                $key = 'item_'.$key;
            }
            if( is_array($value) ) {
                $subnode = $xml_data->addChild($key);
                XMLSaver::array_to_xml($value, $subnode);
            } else {
                $xml_data->addChild("$key",htmlspecialchars("$value"));
            }
        }
    }
}