<?php
namespace laxertu\GeoJSON\Model;

use laxertu\DataTree\DataTreeBase;

/**
 * Class Position
 * @package laxertu\GeoJSON\Model
 * @see laxertu\GeoJSON\tests\PositionTest
 */
class Position extends DataTreeBase
{

    final public function setCoordinates(array $coordinates)
    {
        $this->validateCoordinates($coordinates);
        $this->setValue($coordinates);
    }


    private function validateCoordinates(array $coordinates)
    {
        if (!$coordinates || !is_array($coordinates)) {
            throw new \InvalidArgumentException('coordinates have to be an array of float');
        }

        if (count($coordinates) < 2) {
            throw new \InvalidArgumentException('at least 2 values have to be set');
        }

        if (count($coordinates) > 3) {
            throw new \InvalidArgumentException('no more than 3 values are allowed');
        }

        foreach ($coordinates as $val) {

            if (!is_numeric($val)) {
                throw new \InvalidArgumentException('coordinates must be an array with 2 or 3 numeric elements');
            }
        }
    }



}