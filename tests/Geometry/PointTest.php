<?php
namespace laxertu\GeoJSON\tests\Geometry;


use laxertu\GeoJSON\Model\Geometry\Point;

class PointTest extends \PHPUnit_Framework_TestCase
{
    /** @var Point */
    private $sut;

    public function setUp()
    {
        $this->sut = new Point();
        $this->sut->setName('Sut');
    }

    public function testNoArguments()
    {
        $this->setExpectedException('InvalidArgumentException');
        $this->sut->setCoordinates([]);
    }

    public function testOneArgument()
    {
        $this->setExpectedException('InvalidArgumentException');
        $this->sut->setCoordinates([1]);
    }

    public function testNoNumericArgs()
    {
        $this->setExpectedException('InvalidArgumentException');
        $this->sut->setCoordinates([1, 'a']);
    }

    public function testOk()
    {
        $this->sut->setCoordinates([1, 2]);
        $this->assertSame([1,2], $this->sut->getCoordinates());
        $this->sut->setCoordinates([1.1111, 2.22222, 3.33333]);
        $this->assertSame([1.1111, 2.22222, 3.33333], $this->sut->getCoordinates());
    }

    public function testSetter()
    {
        $this->sut->setCoordinates([1, 2]);
        try {
            $this->sut->setCoordinates([]);
        } catch (\InvalidArgumentException $e) {

        }
        $this->assertSame([1,2], $this->sut->getCoordinates());
    }
}
