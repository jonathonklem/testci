<?php
class QuadrilateralTest extends PHPUnit_Framework_TestCase
{
    function testArea()
    {
        $instance = new Quadrilateral(3, 2);

        $this->isInstanceOf('Quadrilateral',$instance);
        $this->assertEquals($instance->getArea(), 6);
    }
}

?>
