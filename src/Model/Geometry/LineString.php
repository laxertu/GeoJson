<?php
namespace laxertu\GeoJSON\Model\Geometry;

use laxertu\GeoJSON\Helper\CoordinatesValidator;


class LineString extends AbstractGeometry
{
    public function setCoordinates(array $coordinatesList)
    {
        CoordinatesValidator::validateLineStringCoordinates($coordinatesList);
        $this->updateCoordinatesNode($coordinatesList);
    }

    protected function getType()
    {
        return 'LineString';
    }


}