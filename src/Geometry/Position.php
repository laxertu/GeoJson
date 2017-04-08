<?php
namespace laxertu\GeoJSON\Geometry;


/**
 * Class Position
 * @package DataTree\examples\GeoJSON
 * @see DataTree\tests\examples\PositionTest
 */
class Position extends AbstractGeometry
{

    final public function setCoordinates(array $coordinates)
    {
        try {
            $this->validateCoordinates($coordinates);
        } catch (\InvalidArgumentException $e) {
            throw $e;
        }
        $this->coordinates = $coordinates;
    }


    private function validateCoordinates(array $coordinates)
    {
        if (!$coordinates || !is_array($coordinates) || count($coordinates) < 2) {
            throw new \InvalidArgumentException('coordinates must be an array with 2 or more numeric elements');
        }

        foreach ($coordinates as $val) {
            if (!is_numeric($val)) {
                throw new \InvalidArgumentException('coordinates must be an array with 2 or more numeric elements');
            }
        }
    }



}
