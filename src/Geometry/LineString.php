<?php
namespace laxertu\GeoJSON\Geometry;


class LineString extends AbstractOneDimensionalGeometry
{

    protected $type = 'LineString';

    protected function prepare()
    {
        if (count($this->getCoordinates()) < 2) {
            throw new \Exception('Invalid coordinates');
        }

        parent::prepare();
    }


}