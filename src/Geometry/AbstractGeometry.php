<?php

namespace laxertu\GeoJSON\Geometry;

use laxertu\GeoJSON\GeoJSONObject;
use laxertu\DataTree\DataTreeElement;

abstract class AbstractGeometry extends GeoJSONObject
{
    protected $coordinates;

    final protected function setDataTreeCoordinates()
    {
        $this->dataTree->setChildTree(new DataTreeElement('coordinates', $this->getCoordinates()));
    }


    protected function prepare()
    {
        $this->setDataTreeCoordinates();
    }


    final public function getCoordinates()
    {
        return $this->coordinates;
    }
}
