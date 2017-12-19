<?php
/**
 * Created by PhpStorm.
 * User: robinam
 * Date: 19.12.17
 * Time: 23:32
 */

namespace FileConverter;

interface iReader
{
    public function getContain(\SplFileObject $file): array;
}