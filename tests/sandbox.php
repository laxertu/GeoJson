<?php
namespace laxertu\GeoJSON\tests;

use laxertu\GeoJSON\Geometry\Point;

error_reporting(E_ALL);

require_once 'boot.php';
require_once 'print_utils.php';

#------------------------------------------------------

$p = new Point();
$p->setCoordinates(1, 2);
print_r($p);

oJson($p->getContent());