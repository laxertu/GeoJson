<?php
namespace laxertu\GeoJSON\tests\Geometry;

use laxertu\GeoJSON\Model\Geometry\MultiLineString;

class MultiLineStringTest extends \PHPUnit_Framework_TestCase
{
    /** @var  MultiLineString */
    private $sut;

    protected function setUp()
    {
        $this->sut = new MultiLineString();
    }

    public function testSetEmptyCoordinatesError()
    {
        $this->setExpectedException('\InvalidArgumentException');
        $this->sut->setCoordinates([]);
    }

    public function testOnlyOneItemError()
    {
        $this->setExpectedException('\InvalidArgumentException');
        $this->sut->setCoordinates([1,2,3]);
    }

    public function testWrongDataTypeError()
    {
        $this->setExpectedException('\InvalidArgumentException');
        $this->sut->setCoordinates([[1,2,3], [4,5,'a']]);
    }

    public function testSetValidCoordinates()
    {
        $coordinates = [
            [[1,2,3], [4,5,6]],
            [[7,8,9], [10,11,12]]
        ];

        $this->sut->setCoordinates($coordinates);
        $this->assertSame($coordinates, $this->sut->getCoordinates());
    }

    public function testCoordinatesNotChangedOnError()
    {
        $coordinates = [
            [[1,2,3], [4,5,6]],
            [[7,8,9], [10,11,12]]
        ];

        $this->sut->setCoordinates($coordinates);

        try {
            $this->sut->setCoordinates([[1,2,3], [4,5,'a']]);
        } catch (\InvalidArgumentException $e) {
        }

        $this->assertSame($coordinates, $this->sut->getCoordinates());
    }

}