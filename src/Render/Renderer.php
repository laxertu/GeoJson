<?php
namespace laxertu\GeoJSON\Render;

use laxertu\DataTree\Processor\JsonFormatter;
use laxertu\GeoJSON\Model\GeoJSONObject;


class Renderer
{
    public static function render(GeoJSONObject $geoJSONObject)
    {
        return (new JsonFormatter())->buildContent($geoJSONObject);
    }

}