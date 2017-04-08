<?php
namespace DataTree\tests\examples;

use laxertu\GeoJSON\Factory\ObjectFactory;
use laxertu\GeoJSON\Geometry\LineString;

class LineStringTest extends \PHPUnit_Framework_TestCase
{

    /** @var LineString */
    private $sut;

    public function setUp()
    {
        $this->sut = new LineString('test');
    }

    public function testException()
    {
        $this->setExpectedException('Exception');
        $this->sut->getContent();
    }

    public function testBasic()
    {
        $factory = new ObjectFactory();
        $pos1 = $factory->createPosition([100, 0]);
        $pos2 = $factory->createPosition([101, 1]);

        $this->sut->addPosition($pos1)->addPosition($pos2);

        $expected = '{"test":{"type":"LineString","coordinates":[[100,0],[101,1]]}}';
        $obtained = $this->sut->getContent();


        $this->assertEquals($expected, $obtained);
    }

}