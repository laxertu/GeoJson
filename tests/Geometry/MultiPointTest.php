<?php
namespace laxertu\GeoJSON\tests\Geometry;


use laxertu\GeoJSON\Model\Geometry\MultiPoint;

class MultiPointTest extends \PHPUnit_Framework_TestCase
{
    /** @var  MultiPoint */
    private $sut;

    protected function setUp()
    {
        $this->sut = new MultiPoint();
        $this->sut->setName('Sut');
    }

    public function testKo()
    {
        $this->setExpectedException('\InvalidArgumentException');
        $this->sut->setCoordinates([1]);
    }

    public function testSetCoordinates()
    {
        $this->sut->setCoordinates([[1,2,3]]);
        $this->assertSame([[1,2,3]], $this->sut->getCoordinates());

        try {
            $this->sut->setCoordinates([]);
        } catch (\InvalidArgumentException $e) {
            $this->assertSame([1,2,3], $this->sut->getCoordinates());
        }

        $this->sut->setCoordinates([[1,2,3], [4,5,6]]);
        $this->assertSame([[1,2,3], [4,5,6]], $this->sut->getCoordinates());

        try {
            $this->sut->setCoordinates([[7,8,9], ['a']]);
        } catch (\InvalidArgumentException $e) {
        }

        $this->assertSame([[1,2,3], [4,5,6]], $this->sut->getCoordinates());
    }



}
