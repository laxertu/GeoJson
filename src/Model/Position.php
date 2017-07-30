<?php
namespace laxertu\GeoJSON\Model;

use laxertu\DataTree\DataTreeBase;
use laxertu\GeoJSON\helper\CoordinatesValidator;

/**
 * Class Position
 * @package laxertu\GeoJSON\Model
 * @see laxertu\GeoJSON\tests\PositionTest
 */
class Position extends DataTreeBase
{

    final public function setCoordinates(array $coordinates)
    {
        CoordinatesValidator::validateCoordinates($coordinates);
        $this->setValue($coordinates);
    }

}