<?php
namespace laxertu\GeoJSON\Factory;


use laxertu\GeoJSON\Geometry\AbstractOneDimensionalGeometry;
use laxertu\GeoJSON\Geometry\LineString;
use laxertu\GeoJSON\Geometry\MultiPoint;
use laxertu\GeoJSON\Geometry\Position;

class ObjectFactory
{

    public function createPosition(array $coordinates)
    {
        $position = new Position();
        $position->setCoordinates($coordinates);

        return $position;
    }

    public function createMultiPoint(array $positionsCoordinatesList, $name)
    {
        $multiPoint = new MultiPoint($name);
        $this->fillOneDimensionalGeometry($multiPoint, $positionsCoordinatesList);
        return $multiPoint;
    }

    public function createLineString(array $positionsCoordinatesList, $name)
    {
        $lineString = new LineString($name);
        $this->fillOneDimensionalGeometry($lineString, $positionsCoordinatesList);

        return $lineString;
    }


    private function fillOneDimensionalGeometry(AbstractOneDimensionalGeometry $geometry, array $positionsCoordsList)
    {
        /**@var Position $position */
        foreach ($positionsCoordsList as $positionCoordinates) {
            try {
                $position = $this->createPosition($positionCoordinates);
                $geometry->addPosition($position);
            } catch (\InvalidArgumentException $e) {
                throw $e;
            }
        }

    }


} 