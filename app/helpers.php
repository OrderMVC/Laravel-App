<?php

if ( ! function_exists('currency'))
{
	/**
	 * Generate a URL to a controller action.
	 *
	 * @param  string  $name
	 * @param  string  $parameters
	 * @param  bool    $absolute
	 * @return string
	 */
	function currency($amount)
	{
		return '$'.number_format($amount, 2);
	}
}