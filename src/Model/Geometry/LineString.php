<?php
namespace laxertu\GeoJSON\Model\Geometry;

use laxertu\GeoJSON\helper\CoordinatesValidator;
use laxertu\DataTree\DataTreeElement;

class LineString extends AbstractGeometry
{
    public function setCoordinates(array $coordinatesList)
    {

        if (count($coordinatesList) < 2) {
            throw new \InvalidArgumentException('LineString coordinates have to be at leat 2');
        }

        foreach ($coordinatesList as $coordinates) {
            CoordinatesValidator::validateCoordinates($coordinates);
        }
        $this->setChild(new DataTreeElement('coordinates', $coordinatesList), 1);
    }

    protected function getType()
    {
        return 'LineString';
    }


}