<?php
namespace laxertu\GeoJSON\tests;


use laxertu\GeoJSON\Model\Geometry\Point;

class PointTest extends \PHPUnit_Framework_TestCase
{

    private $sut;

    public function setUp()
    {
        $this->sut = new Point();
    }

}
