<?php

namespace FileConverter\XML;


use FileConverter\iSaver;

class XMLSaver implements iSaver
{
    public function saveArrayInFile(array $contain, string $output_file_path): void
    {
        $file_name = basename($output_file_path, '.xml');
        $title_of_xml = preg_replace('/\s+/', '', $file_name); //delete whitespaces
        $xml_data = new \SimpleXMLElement('<?xml version="1.0"?><' . $title_of_xml . '></' . $title_of_xml . '>');
        XMLSaver::arrayToXml($contain, $xml_data);
        $xml_data->saveXML($output_file_path);
    }

    private function arrayToXml(array $data, \SimpleXMLElement &$xml_data )
    {
        foreach($data as $key => $value) {
            if(is_numeric($key)) {
                $key = 'item_'.$key;
            }
            if(is_array($value)) {
                $subnode = $xml_data->addChild($key);
                XMLSaver::arrayToXml($value, $subnode);
            } else {
                $xml_data->addChild("$key",htmlspecialchars("$value"));
            }
        }
    }
}