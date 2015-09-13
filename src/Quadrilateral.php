<?php

class Quadrilateral {

    private $_width, $_height;


    public function __construct($width=1,$height=1) {
        $this->_width 	= $width;
				$this->_height	= $height;
    }

    public function getArea() {
			return $this->_width * $this->_height;
    }

		public function getHeight() { 
			return $this->_height;
		}

		public function getWidth() {
			return $this->_width;
		}

		public function setWidth($width) {
			$this->_width = $width+2;
		}

		public function setHeight($height) {
			$this->_height = $height;
		}
}

