<?php
namespace IdealCode\WindowsCompatibility\Override\Framework\View\Element\Template\File;

use Magento\Framework\View\Element\Template\File\Validator as NativeValidator;

class Validator extends NativeValidator
{
    protected function isPathInDirectories($path, $directories)
    {
        $directories = array_map(function($value) {
            return str_replace(['\\', '/'], DIRECTORY_SEPARATOR, $value);
        }, (array)$directories);

        return parent::isPathInDirectories($path, $directories);
    }
}
