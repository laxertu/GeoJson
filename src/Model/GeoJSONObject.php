<?php
namespace laxertu\GeoJSON\Model;
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

    //private $bbox = [];
    //private $foreignMembers = [];

    final public function __construct()
    {
        $this->setChild(new DataTreeElement('type', $this->getType()), 0);
    }

    abstract protected function getType();
}
