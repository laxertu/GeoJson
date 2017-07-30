<?php
namespace laxertu\GeoJSON\Model\Geometry;


use laxertu\GeoJSON\Model\GeoJSONObject;

abstract class AbstractGeometry extends GeoJSONObject
{

    protected $type = 'Geometry';
    protected $coordinates;

}