<?php
namespace laxertu\GeoJSON\Factory;


use laxertu\GeoJSON\Model\Geometry\LineString;
use laxertu\GeoJSON\Model\Geometry\MultiLineString;
use laxertu\GeoJSON\Model\Geometry\MultiPoint;
use laxertu\GeoJSON\Model\Geometry\Point;

class GeometryFactory
{

    public function createPoint($name, $coordinates)
    {
        $obj = new Point();
        $obj->setName($name);
        $obj->setCoordinates($coordinates);

        return $obj;
    }

    public function createLineString($name, $coordinates)
    {
        $obj = new LineString();
        $obj->setName($name);
        $obj->setCoordinates($coordinates);

        return $obj;
    }

    public function createMultiPoint($name, $coordinates)
    {
        $obj = new MultiPoint();
        $obj->setName($name);
        $obj->setCoordinates($coordinates);

        return $obj;
    }

    public function createMultiLineString($name, $coordinates)
    {
        $obj = new MultiLineString();
        $obj->setName($name);
        $obj->setCoordinates($coordinates);

        return $obj;
    }

}
