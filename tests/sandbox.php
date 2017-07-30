<?php
namespace laxertu\GeoJSON\tests;

use laxertu\DataTree\Processor\JsonFormatter;
use laxertu\GeoJSON\Model\Geometry\Point;
use laxertu\GeoJSON\Model\Position;

error_reporting(E_ALL);

require_once 'boot.php';
require_once 'print_utils.php';

#------------------------------------------------------

$pos = new Position([1,2]);


$p = new Point('MyPoint');

$p->setCoordinates($pos);

$f = new JsonFormatter();
oJson($f->buildContent($p));

