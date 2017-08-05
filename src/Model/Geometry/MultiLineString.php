<?php
namespace laxertu\GeoJSON\Model\Geometry;

use laxertu\GeoJSON\Helper\CoordinatesValidator;

/**
 * @package laxertu\GeoJSON\Model\Geometry
 * @see \laxertu\GeoJSON\tests\Geometry\MultiLineStringTest
 */
class MultiLineString extends AbstractGeometry
{

    public function setCoordinates(array $coordinatesList)
    {

        if (empty($coordinatesList)) {
            throw new \InvalidArgumentException('Empty coordinates list');
        }

        foreach ($coordinatesList as $coordinates) {
            CoordinatesValidator::validateLineStringCoordinates($coordinates);
        }

        $this->updateCoordinatesNode($coordinatesList);
    }

    protected function getType()
    {
        return 'MultiLineString';
    }


}
