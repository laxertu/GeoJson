<?php
namespace laxertu\GeoJSON;
use laxertu\DataTree\DataTreeBase;
use laxertu\DataTree\DataTreeElement;


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

    //private $bbox = [];
    //private $foreignMembers = [];

    final public function __construct()
    {
        /**
         * @see https://github.com/laxertu/DataTreeComposite/issues/1
         */
        $this->setName($this->type);
        $this->setChild(new DataTreeElement('type', $this->type), 0);
    }
}
