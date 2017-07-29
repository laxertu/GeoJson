<?php
namespace laxertu\GeoJSON\Geometry;

use laxertu\GeoJSON\GeoJSONObject;

class Point extends GeoJSONObject
{
    protected $type = 'Point';

    /** @var  Position */
    private $position;

    protected function prepare()
    {
        // TODO: Implement prepare() method.
    }


    private function getPosition()
    {
        if (!$this->position) {
            $this->position = new Position();
        }

        return $this->position;
    }

    public function setCoordinates($latitude, $longitude)
    {
        $this->getPosition()->setCoordinates([$latitude, $longitude]);
    }

}
