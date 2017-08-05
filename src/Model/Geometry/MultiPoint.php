<?php
namespace laxertu\GeoJSON\Model\Geometry;

use laxertu\GeoJSON\Helper\CoordinatesValidator;

/**
 * @package laxertu\GeoJSON\Model\Geometry
 * @see \laxertu\GeoJSON\tests\Geometry\MultiPointTest
 */
class MultiPoint extends AbstractGeometry
{
    public function setCoordinates(array $coordinatesList)
    {
        foreach ($coordinatesList as $coordinates) {
            CoordinatesValidator::validateCoordinates($coordinates);
        }
        $this->updateCoordinatesNode($coordinatesList);
    }

    protected function getType()
    {
        return 'MultiPoint';
    }

}
