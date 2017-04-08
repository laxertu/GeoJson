<?php
namespace laxertu\GeoJSON\Feature;

use laxertu\GeoJSON\GeoJSONObject;
use laxertu\DataTree\OpenDataTree;
use laxertu\DataTree\Processor\ProcessableInterface;
use laxertu\GeoJSON\Geometry;

class Feature extends GeoJSONObject
{

    /** @var  Geometry */
    private $geometry;

    /** @var  String */
    private $id;

    /** @var  ProcessableInterface */
    private $properties = null;

    protected $type = 'Feature';

    /**
     * @param \laxertu\GeoJSON\Geometry $geometry
     */
    public function setGeometry(Geometry $geometry)
    {
        $this->geometry = $geometry;
    }

    /**
     * @return \laxertu\GeoJSON\Geometry
     */
    public function getGeometry()
    {
        return $this->geometry;
    }

    /**
     * @param String $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return String
     */
    public function getId()
    {
        return $this->id;
    }

    public function setProperties(ProcessableInterface $properties)
    {
        $propertiesTree = new OpenDataTree('properties');
        $propertiesTree->setChild($properties, 0);
        $this->dataTree->setChild($propertiesTree, 1);
    }

    /**
     * @return \laxertu\DataTree\OpenDataTree
     */
    public function getProperties()
    {
        return $this->getFormatter()->buildContent($this->properties);
    }

    protected function prepare()
    {
        // TODO: Implement prepare() method.
    }


}