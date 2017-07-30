<?php
namespace laxertu\GeoJSON\tests;


use laxertu\GeoJSON\Model\Geometry\MultiPoint;

class MultiPointTest extends \PHPUnit_Framework_TestCase
{
    /** @var  MultiPoint */
    private $sut;

    protected function setUp()
    {
        $this->sut = new MultiPoint();
    }

    public function testKo()
    {
        $this->setExpectedException('\InvalidArgumentException');
        $this->sut->setCoordinates([1]);
    }



}
