<?php
namespace laxertu\GeoJSON\tests;
require_once '../vendor/autoload.php';

$autoload = function ($className) {
    $nameSpace = 'laxertu\GeoJSON';

    if(substr($className, 0, strlen($nameSpace)) == $nameSpace) {
        $path = str_replace($nameSpace, '', $className);
        $path = str_replace('\\', '/', $path);
        $fullPath = __DIR__.'/../src'.$path.'.php';

        require_once $fullPath;
    }


};

spl_autoload_register($autoload);

