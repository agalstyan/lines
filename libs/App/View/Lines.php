<?php

namespace App\View;

use \App\Figure\Point as Point;

/**
 *
 * @package
 * @author agalstyan
 * @since
 */
class Lines extends AbstractView
{
	const LINE_WIDTH = 15;

	/**
	 * @var array
	 */
	private $_lines;

	/**
	 * Draw a line
	 * @return AbstractView
	 */
	public function render()
	{
		$this->_lines = $this->_fields['lines'];
		if(empty($this->_lines)) {
			return $this;
		}

		$lines_for_view = $this->_getLinesForView();

		$this->_smarty->assign('lines', $lines_for_view);
		$this->_smarty->assign('proportion', $this->_fields['proportion']);
		$this->_smarty->display($this->_template);

		return $this;
	}

	/**
	 * Get lines for view
	 * @return Lines
	 */
	private function _getLinesForView()
	{
		$lines_for_view = array();

		/** @var \App\Figure\Line $line */
		foreach($this->_lines as $line) {
			$line_for_view = array(
				'starting_point' => $line->getStartingPoint()->getCoordinates(),
				'final_point' => $line->getFinalPoint()->getCoordinates(),
				'width' => $line->getWidth(),
				'color' => $line->getColor(),
			);
			$lines_for_view[] = $line_for_view;
		}

		return $lines_for_view;
	}

}
