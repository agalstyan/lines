<?php

namespace App\Figures;

/**
 *
 * @package
 * @author agalstyan
 * @since
 */
class Line implements \App\Figures\IFigure
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
	private $_line_length = 0;

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
	public function setLineLength($length)
	{
		$this->_line_length = $length;
		return $this;
	}

	public function draw()
	{
		$this->_countFinalPoint()->_drawLine();
	}

	private function _countFinalPoint()
	{
		$angle_in_rad = deg2rad($this->_angle);
		$final_point_x = $this->_line_length * cos($angle_in_rad) + $this->_starting_point->getX();
		$final_point_y = $this->_line_length * sin($angle_in_rad) + $this->_starting_point->getY();
		$this->_final_point = new Point($final_point_x, $final_point_y);

		return $this;
	}

	private function _drawLine()
	{
	   	$image = imagecreatetruecolor(self::DEFAULT_LINE_WIDTH, self::DEFAULT_LINE_HEIGHT);
		$color = imagecolorallocate($image, 0, 0, 0);

		$x1 = $this->_starting_point->getX();
		$y1 = $this->_starting_point->getY();
		$x2 = $this->_final_point->getX();
		$y2 = $this->_final_point->getY();

		 imageline($image, $x1, $y1, $x2, $y2, $color);
	}



}
