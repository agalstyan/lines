<?php

namespace App\View;

/**
 * @package
 * @author agalstyan
 * @since
 */
interface IView
{
	/**
	 * Draw a figure
	 * @return AbstractView
	 */
  	public function render();
}
