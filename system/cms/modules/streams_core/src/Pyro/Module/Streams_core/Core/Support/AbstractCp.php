<?php
namespace Pyro\Module\Streams_core\Core\Support;

use Closure;
use Pyro\Module\Streams_core\Core\Model;

abstract class AbstractCp
{
	protected static $query = null;

	protected static $data = array();

	protected static $render = null;

	protected static $pagination = null;

	protected static $pagination_uri = null;

	protected static $offset = null;

	protected static $offset_uri = null;

	protected static $stream = null;

	protected static $columns = array('*');

	protected static $exclude = false;

	public static function query(Closure $callback = null)
	{
		static::$query = call_user_func($callback, static::$query);

		return new static;
	}

	public static function pagination($pagination = null, $pagination_uri = null)
	{
		static::$pagination = $pagination;
		static::$pagination_uri = $pagination_uri;
		
		// -------------------------------------
		// Find offset URI from array
		// -------------------------------------

		if (is_numeric(static::$pagination))
		{
			$segs = explode('/', static::$pagination_uri);
			static::$offset_uri = count($segs)+1;

				static::$offset = ci()->uri->segment(static::$offset_uri, 0);

			// Calculate actual offset if not first page
			if ( $offset > 0 )
			{
				static::$offset = ($offset - 1) * static::$pagination;
			}
		}
		else
		{
			static::$offset_uri = null;
			static::$offset = 0;
		}
	
		return new static;
	}

	public static function columns($columns = '*', $exclude = false)
	{
		$columns = is_string($columns) ? array($columns) : $columns;
		
		static::$columns = $columns;
		static::$exclude = $exclude;

		return new static;
	}

	public function render()
	{
		$method = camel_case('render'.static::$render);

		if (method_exists($this, $method))
		{
			return $this->{$method}();
		}

		return false;
	}

}