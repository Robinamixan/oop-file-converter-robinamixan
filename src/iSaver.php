<?php
/**
 * Created by PhpStorm.
 * User: robinam
 * Date: 19.12.17
 * Time: 23:32
 */

namespace FileConverter;

interface iSaver
{
    public function saveArrayInFile(array $contain, string $output_file_path): void;
}