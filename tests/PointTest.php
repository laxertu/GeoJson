<?php
namespace laxertu\GeoJSON\tests;


use laxertu\GeoJSON\Model\Geometry\Point;

class PointTest extends \PHPUnit_Framework_TestCase
{
    /** @var Point */
    private $sut;

    public function setUp()
    {
        $this->sut = new Point();
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
        $this->assertSame([1,2], $this->sut->getChildren()[1]->getValue());
        $this->sut->setCoordinates([1.1111, 2.22222, 3.33333]);
        $this->assertSame([1.1111, 2.22222, 3.33333], $this->sut->getChildren()[1]->getValue());
    }

    public function testSetter()
    {
        $this->sut->setCoordinates([1, 2]);
        try {
            $this->sut->setCoordinates([]);
        } catch (\InvalidArgumentException $e) {

        }
        $this->assertSame([1,2], $this->sut->getChildren()[1]->getValue());
    }
}
