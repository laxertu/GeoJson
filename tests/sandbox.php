<?php
namespace laxertu\GeoJSON\tests;

use laxertu\GeoJSON\Render\Renderer;
use laxertu\GeoJSON\Factory\GeometryFactory;

error_reporting(E_ALL);

require_once 'boot.php';
require_once 'print_utils.php';

#------------------------------------------------------

$f = new GeometryFactory();
