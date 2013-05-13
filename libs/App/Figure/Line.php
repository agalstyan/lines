<?php

namespace App\Figure;

/**
 *
 * @package
 * @author agalstyan
 * @since
 */
class Line implements IFigure
{
	const DEFAULT_LINE_WIDTH = 50;
	const DEFAULT_LINE_HEIGHT = 50;

	/**
	 * @var Point
	 */
	private $_starting_point;
	/**
	 * @var Point
	 */
	private $_final_point;
	/**
	 * @var int
	 */
	private $_angle = 0;
	/**
	 * @var int
	 */
	private $_length = 0;
	private $_width = 0;
	private $_color = '#000';

	/**
	 * Set starting point
	 * @param Point $point
	 * @return Line
	 */
	public function setStartingPoint(Point $point)
	{
	 	$this->_starting_point = $point;
		return $this;
	}

	/**
	 * Get starting point
	 * @return Point
	 */
	public function getStartingPoint()
	{
		return $this->_starting_point;
	}

	/**
	 * Get final point
	 * @return Point
	 */
	public function getFinalPoint()
	{
		return $this->_final_point;
	}

	/**
	 * Set color
	 * @param string $color
	 * @return Line
	 */
	public function setColor($color)
	{
		$this->_color = $color;
		return $this;
	}

	/**
	 * Get color
	 * @return string
	 */
	public function getColor()
	{
		return $this->_color;
	}

	/**
	 * Set width
	 * @param int $width
	 * @return Line
	 */
	public function setWidth($width)
	{
		$this->_width = $width;
		return $this;
	}

	/**
	 * Get width
	 * @return int
	 */
	public function getWidth()
	{
		return $this->_width;
	}

	/**
	 * Set angle
	 * @param int $angle
	 * @return Line
	 */
	public function setAngle($angle)
	{
		$this->_angle = $angle % 360;
		return $this;
	}

	/**
	 * Set line length
	 * @param int $length
	 * @return Line
	 */
	public function setLength($length)
	{
		$this->_length = $length;
		return $this;
	}

	/**
	 * Construct
	 * @return Line
	 */
	public function construct()
	{
		$this->_countFinalPoint();
		return $this;
	}

	/**
	 * Count final point
	 * @return Line
	 */
	private function _countFinalPoint()
	{
		$angle_in_rad_cos = deg2rad($this->_angle);
		$angle_in_rad_sin = deg2rad($this->_angle - 180);
		$final_point_x = $this->_length * cos($angle_in_rad_cos) + $this->_starting_point->getX();
		$final_point_y = $this->_length * sin($angle_in_rad_sin) + $this->_starting_point->getY();
		$this->_final_point = new Point($final_point_x, $final_point_y);

		return $this;
	}
}
