<?php
namespace laxertu\GeoJSON\Model\Geometry;

use laxertu\GeoJSON\Model\GeoJSONObject;
use laxertu\DataTree\DataTreeElement;

abstract class AbstractGeometry extends GeoJSONObject
{
    final public function getCoordinates()
    {
        $children = $this->getChildren();
        if (!isset($children[1])) {
            $this->updateCoordinatesNode([]);
        }
        return $this->getChildren()[1]->getValue();
    }

    final protected function updateCoordinatesNode(array $coordinatesNodeContent)
    {
        $this->setChild(new DataTreeElement('coordinates', $coordinatesNodeContent), 1);
    }

}