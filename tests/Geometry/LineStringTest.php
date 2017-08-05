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
        $this->sut->setName('Sut');
    }

    public function testKo()
    {
        $this->setExpectedException('\InvalidArgumentException');
        $this->sut->setCoordinates([[1,2,3]]);
    }

    public function testSetCoordinates()
    {
        $this->sut->setCoordinates([[1,2,3], [4,5,6]]);
        $this->assertSame([[1,2,3], [4,5,6]], $this->sut->getCoordinates());

        try {
            $this->sut->setCoordinates([]);
        } catch (\InvalidArgumentException $e) {
            $this->assertSame([[1,2,3], [4,5,6]], $this->sut->getCoordinates());
        }

        try {
            $this->sut->setCoordinates([[7,8,9], ['a']]);
        } catch (\InvalidArgumentException $e) {
        }

        $this->assertSame([[1,2,3], [4,5,6]], $this->sut->getCoordinates());

    }

}
