<?php
namespace laxertu\GeoJSON\Model\Geometry;

use laxertu\DataTree\DataTreeElement;
use laxertu\GeoJSON\Helper\CoordinatesValidator;

/**
 * @package laxertu\GeoJSON\Model\Geometry
 * @see \laxertu\GeoJSON\tests\Geometry\PointTest
 */
class Point extends AbstractGeometry
{
    public function setCoordinates(array $coordinates)
    {
        CoordinatesValidator::validateCoordinates($coordinates);
        $this->setChild(new DataTreeElement('coordinates', $coordinates), 1);
    }

    protected function getType()
    {
        return 'Point';
    }

}
