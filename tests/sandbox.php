<?php
namespace laxertu\GeoJSON\tests;

use laxertu\DataTree\DataTreeElement;
use laxertu\DataTree\Processor\json\JsonFormatter;
use laxertu\GeoJSON\Factory\ObjectFactory;
use laxertu\GeoJSON\Feature\Feature;
use laxertu\GeoJSON\Geometry\MultiPoint;
use laxertu\GeoJSON\Geometry\Point;

error_reporting(E_ALL);

require_once 'boot.php';
require_once 'print_utils.php';

#------------------------------------------------------

oJson(json_encode(null));
