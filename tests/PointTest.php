<?php
namespace laxertu\DataTree\tests\Geometry;

use laxertu\GeoJSON\Geometry\Point;

class PointTest extends \PHPUnit_Framework_TestCase
{



    public function testCreate()
    {
        $sut = new Point('TestPoint');
        $sut->setCoordinates(123, 456);

        $obtained = json_decode($sut->getContent());

        $this->assertEquals(123, $obtained->TestPoint->coordinates[0]);
        $this->assertEquals('Point', $obtained->TestPoint->type);
    }

}
