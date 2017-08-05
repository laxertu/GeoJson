<?php
namespace laxertu\GeoJSON\tests;

use laxertu\DataTree\Processor\JsonFormatter;
use laxertu\GeoJSON\Model\Geometry\LineString;

error_reporting(E_ALL);

require_once 'boot.php';
require_once 'print_utils.php';

#------------------------------------------------------

$mp = new LineString();
$mp->setName('MyLineString');
$mp->setCoordinates([[1,2,3], [4,5,6]]);

$f = new JsonFormatter();

$json = $f->buildContent($mp);

oStr($json);

oJson($json);
