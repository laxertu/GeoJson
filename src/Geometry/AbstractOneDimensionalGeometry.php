<?php
namespace laxertu\GeoJSON\Geometry;


class AbstractOneDimensionalGeometry extends AbstractGeometry
{
    final public function addPosition(Position $position)
    {
        $this->coordinates[]=$position->getCoordinates();
        return $this;
    }
}