<?php
namespace DataTree\tests\examples;

use laxertu\GeoJSON\Geometry\Point;

class PointTest extends \PHPUnit_Framework_TestCase
{

    public function testNoArguments()
    {
        $this->setExpectedException('InvalidArgumentException');
        $sut = new Point();
        $sut->setCoordinates([]);
    }

    public function testOneArgument()
    {
        $this->setExpectedException('InvalidArgumentException');
        $sut = new Point();
        $sut->setCoordinates([1]);
    }

    public function testNoNumericArgs()
    {
        $this->setExpectedException('InvalidArgumentException');
        $sut = new Point();
        $sut->setCoordinates([1, 'a']);

    }

    public function testOk()
    {
        $sut = new Point();
        $sut->setCoordinates([1, 2]);
    }

    public function testCreate()
    {
        $sut = new Point('TestPoint');
        $sut->setCoordinates([123, 456]);

        $obtained = json_decode($sut->getContent());

        $this->assertEquals(123, $obtained->TestPoint->coordinates[0]);
        $this->assertEquals('Point', $obtained->TestPoint->type);
    }

}
