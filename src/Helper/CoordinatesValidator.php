<?php
namespace laxertu\GeoJSON\Helper;


class CoordinatesValidator {

    public static function validateCoordinates($coordinates)
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

    public static function validateLineStringCoordinates($coordinatesList)
    {

        if (!is_array($coordinatesList)) {
            throw new \InvalidArgumentException('Array expected');
        }

        if (count($coordinatesList) < 2) {
            throw new \InvalidArgumentException('LineString coordinates have to be at leat 2');
        }

        foreach ($coordinatesList as $coordinates) {
            CoordinatesValidator::validateCoordinates($coordinates);
        }

    }
}