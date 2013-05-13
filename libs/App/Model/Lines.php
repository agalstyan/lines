<?php

namespace App\Model;

class Lines extends AbstractModel
{
	const MAX_PROPORTION = 4;
	const ZOOM = 15;
	const CANVAS_WIDTH = 1024;
	const CANVAS_HEIGHT = 600;

	/**
	 * @var int
	 */
	private $_proportion = 0;
	/**
	 * @var int
	 */
	private $_line1_length = 0;
	/**
	 * @var int
	 */
	private $_line2_length = 0;

	/**
	 * Construct
	 */
	public function __construct()
	{
		$this->_countProportion()->_countLengths();
	}

	/**
	 * Get lines proportion
	 * @return int
	 */
	public function getProportion()
	{
		return $this->_proportion;
	}

	/**
	 * Get lines
	 * @return array
	 */
	public function getLines()
	{
		$lines[] = $this->_getFirstLine();
		$lines[] = $this->_getSecondLine();

		return $lines;
	}

	/**
	 * Count lengths
	 * @return Lines
	 */
	private function _countProportion()
	{
		$this->_proportion = rand(1, self::MAX_PROPORTION);

		return $this;
	}

	/**
	 * Count lengths
	 * @return Lines
	 */
	private function _countLengths()
	{
		$this->_line1_length = rand(1, 10) * self::ZOOM;
		$this->_line2_length = $this->_line1_length * $this->_proportion;

		return $this;
	}

	/**
	 * Get first line
	 * @return \App\Figure\Line
	 */
	private function _getFirstLine()
	{
		$line = $this->_getLine($this->_line1_length);
		return $line;
	}

	/**
	 * Get second line
	 * @return \App\Figure\Line
	 */
	private function _getSecondLine()
	{
		$line = $this->_getLine($this->_line2_length);
		return $line;
	}

	/**
	 * Get line
	 * @param int $length
	 * @return \App\Figure\Line
	 */
	private function _getLine($length)
	{
		$x = $length + rand(1, 30);
		$y = $length + rand(1, 30);
		$width = rand(5, 20);

		$staring_point = new \App\Figure\Point($x, $y);
		$angle = rand(0, 360);

		$line = new \App\Figure\Line();
		$line->setStartingPoint($staring_point)
			->setAngle($angle)
			->setLength($length)
			->setWidth($width)
			->construct();

		return $line;
	}
}
