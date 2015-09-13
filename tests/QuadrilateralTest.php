<?php
class QuadrilateralTest extends PHPUnit_Framework_TestCase
{
    function testArea()
    {
        $instance = new Quadrilateral(3, 2);

        $this->assertEquals($instance->getArea(), 6);
    }

		function testSetHeight() {
				// defaults to 1x1
        $instance = new Quadrilateral();

				// should now be 1x5
				$instance->setHeight(5);

        $this->assertEquals($instance->getArea(), 5);
		}

		function testSetWidth() {
				// defaults to 1x1
        $instance = new Quadrilateral();

				// should now be 7x1
				$instance->setWidth(7);

        $this->assertEquals($instance->getArea(), 7);
		}
}

?>
