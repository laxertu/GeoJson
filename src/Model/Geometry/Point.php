<?php
namespace laxertu\GeoJSON\Model\Geometry;

use laxertu\DataTree\DataTreeElement;
use laxertu\GeoJSON\Model\Position;

/**
 * @package laxertu\GeoJSON\Model\Geometry
 * @see \laxertu\GeoJSON\tests\PointTest
 */
class Point extends AbstractGeometry
{

    protected $type = 'Point';

    public function setCoordinates(array $coordinates)
    {
        $position = new Position($coordinates);
        $this->setChild(new DataTreeElement('coordinates', $position->getValue()), 1);
    }

}
