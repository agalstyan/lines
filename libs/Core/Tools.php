<?php

namespace Core;

/**
 *
 * @package
 * @author agalstyan
 * @since
 */
class Tools
{
	/**
	 * @var array
	 */
	private static $_storage = array();

	/**
	 * Set data to config
	 * @param string $key
	 * @param string $value
	 * @return Config
	 */
	public static function set($key, $value)
	{
		self::$_storage[$key] = $value;
	}

	/**
	 * Get data from config
	 * @param string $key
	 * @return mixed|null
	 */
	public static function get($key)
	{
		if(!array_key_exists($key, self::$_storage)) {
			trigger_error('Key "' . $key . '" does not exist in tools');
			return null;
		}

		return self::$_storage[$key];
	}

}
