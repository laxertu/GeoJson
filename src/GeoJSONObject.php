<?php
namespace laxertu\GeoJSON;

use laxertu\DataTree\DataTree;
use laxertu\DataTree\DataTreeElement;
use laxertu\DataTree\Processor\JsonFormatter;


/**
 * Class GeoJSONObject
 * @package DataTree\examples\GeoJSON
 * @link http://geojson.org/geojson-spec.html
 *
 */
abstract class GeoJSONObject
{
    /** @var  JsonFormatterInterface */
    private $formatter;

    /** @var String Type of Object, 'Point', 'LineString', etc */
    protected $type;

    /** @var  DataTree */
    protected $dataTree;

    public final function __construct($name = 'GeoJsonObject')
    {
        $this->dataTree = new DataTree($name);
        $this->dataTree->setChildTree(new DataTreeElement('type', $this->type));
    }


    protected function getFormatter()
    {
        if (!$this->formatter) {
            $this->formatter = new JsonFormatter();
        }

        return $this->formatter;
    }

    public final function setFormatter(JsonFormatterInterface $jsonFormatterInterface)
    {
        $this->formatter = $jsonFormatterInterface;
    }

    abstract protected function prepare();


    public final function getContent()
    {
        $this->prepare();
        return $this->getFormatter()->buildContent($this->dataTree);
    }

}
