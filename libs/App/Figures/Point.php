<?php

namespace App\Figures;

/**
 *
 * @package
 * @author agalstyan
 * @since
 */
class Point implements IFigure
{
	/**
	 * @var float
	 */
	private $_x = 0.0;

	/**
	 * @var float
	 */
	private $_y = 0.0;

	/**
	 * Construct
	 * @param float $x
	 * @param float $y
	 */
	public function __construct($x, $y)
	{
		$this->_x = $x;
		$this->_y = $y;
	}

	/**
	 * Get x coordinate
	 * @return float
	 */
	public function getX()
	{
		return $this->_x;
	}

	/**
	 * Get y coordinate
	 * @return float
	 */
	public function getY()
	{
		return $this->_y;
	}

	public function draw()
	{

	}

}
