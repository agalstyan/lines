<?php

namespace Core;

/**
 *
 * @package
 * @author agalstyan
 * @since
 */
class Config
{
	/**
	 * @var array
	 */
	private $_storage = array();

	/**
	 * Set data to config
	 * @param string $key
	 * @param string $value
	 * @return Config
	 */
	public function set($key, $value)
	{
		$this->_storage[$key] = $value;
		return $this;
	}

	/**
	 * Get data from config
	 * @param string $key
	 * @return mixed|null
	 */
	public function get($key)
	{
		if(!array_key_exists($key, $this->_storage)) {
			trigger_error('Key "' . $key . '" does not exist in config');
			return null;
		}

		return $this->_storage[$key];
	}

}
