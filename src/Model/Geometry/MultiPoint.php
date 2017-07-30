<?php
namespace laxertu\GeoJSON\Model\Geometry;
use laxertu\DataTree\DataTreeElement;
use laxertu\GeoJSON\helper\CoordinatesValidator;

/**
 * @package laxertu\GeoJSON\Model\Geometry
 * @see \laxertu\GeoJSON\tests\Geometry\MultiPointTest
 */
class MultiPoint extends AbstractGeometry
{

    protected $type = 'MultiPoint';
    protected $isAList = true;


    public function setCoordinates(array $coordinatesList)
    {
        foreach ($coordinatesList as $coordinates) {
            CoordinatesValidator::validateCoordinates($coordinates);
            $this->setChild(new DataTreeElement('coordinates', $coordinatesList), 1);
        }
    }
}
