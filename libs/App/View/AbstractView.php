<?php

namespace App\View;

/**
 *
 * @package
 * @author agalstyan
 * @since
 */
abstract class AbstractView implements IView
{
	/**
	 * @var \Smarty
	 */
	protected $_smarty;
	
	/**
	 * @var \App\Figure\IFigure
	 */
	protected $_figure;
	/**
	 * @var array
	 */
	protected $_fields = array();
	/**
	 * @var string
	 */
	protected $_template = '';

	/**
	 * Construct
	 */
	public function __construct()
	{
		$this->_smarty = \Core\Tools::get('smarty');
	}	

	/**
	 * Set field
	 * @param string $key
	 * @param mixed $value
	 * @return AbstractView
	 */
	public function setField($key, $value)
	{
		$this->_fields[$key] = $value;
		return $this;
	}

	/**
	 * @param $template
	 * @return AbstractView
	 */
	public function setTemplate($template)
	{
		$this->_template = $template;
		return $this;
	}
}
