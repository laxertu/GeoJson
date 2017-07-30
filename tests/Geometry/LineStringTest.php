<?php
namespace laxertu\GeoJSON\tests\Geometry;

use laxertu\GeoJSON\Model\Geometry\LineString;

class LineStringPointTest extends \PHPUnit_Framework_TestCase
{
    /** @var  LineString */
    private $sut;

    protected function setUp()
    {
        $this->sut = new LineString();
    }

    public function testKo()
    {
        $this->setExpectedException('\InvalidArgumentException');
        $this->sut->setCoordinates([[1,2,3]]);
    }

    public function testSetCoordinates()
    {
        $this->sut->setCoordinates([[1,2,3], [4,5,6]]);
        $this->assertSame([[1,2,3], [4,5,6]], $this->sut->getChildren()[1]->getValue());
    }

}
