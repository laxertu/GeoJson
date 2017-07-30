<?php
namespace laxertu\GeoJSON;
use laxertu\DataTree\DataTreeBase;


/**
 * Class GeoJSONObject
 * @package DataTree\examples\GeoJSON
 * @link https://tools.ietf.org/pdf/rfc7946.pdf
 *
 */
abstract class GeoJSONObject extends DataTreeBase
{
    /**
     * @var String Type of Object
     *
     * "Point", "MultiPoint", "LineString","MultiLineString", "Polygon", "MultiPolygon", "GeometryCollection"
     *
     */
    protected $type;

    private $bbox = [];
    private $foreignMembers = [];

    final public function __construct($type)
    {
        $this->type = $type;
    }



}
