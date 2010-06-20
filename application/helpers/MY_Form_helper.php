<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * CodeIgniter HTML5 Form Helper
 *
 * Extended from the CodeIgniter native HTML helper
 * @copyright	Copyright (c) 2006, EllisLab, Inc.
 * @link		http://codeigniter.com
 *
 * Description:
 *
 * This extends the form helper to do all the cool new HTML5 stuff.
 *
 * @copyright 	Copyright (c) Adam Fairholm 2010
 * @version 	1.0
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 **/

// ------------------------------------------------------------------------

/**
 * Email Field
 *
 * Identical to the input function but adds the "email" type
 *
 * @access	public
 * @param	mixed
 * @param	string
 * @param	mixed
 * @return	string
 */
if ( ! function_exists('form_email'))
{
	function form_email($data = '', $value = '', $extra = '')
	{
		$defaults = array('type' => 'email', 'name' => (( ! is_array($data)) ? $data : ''), 'value' => $value);

		return "<input "._parse_form_attributes($data, $defaults)._parse_extras($extra)." />";
	}
}

// ------------------------------------------------------------------------

/**
 * Telephone Field
 *
 * Identical to the input function but adds the "tel" type
 *
 * @access	public
 * @param	mixed
 * @param	string
 * @param	mixed
 * @return	string
 */
if ( ! function_exists('form_telephone'))
{
	function form_telephone($data = '', $value = '', $extra = '')
	{
		$defaults = array('type' => 'tel', 'name' => (( ! is_array($data)) ? $data : ''), 'value' => $value);

		return "<input "._parse_form_attributes($data, $defaults)._parse_extras($extra)." />";
	}
}

// ------------------------------------------------------------------------

/**
 * URL Field
 *
 * Identical to the input function but adds the "url" type
 *
 * @access	public
 * @param	mixed
 * @param	string
 * @param	mixed
 * @return	string
 */
if ( ! function_exists('form_url'))
{
	function form_url($data = '', $value = '', $extra = '')
	{
		$defaults = array('type' => 'url', 'name' => (( ! is_array($data)) ? $data : ''), 'value' => $value);

		return "<input "._parse_form_attributes($data, $defaults)._parse_extras($extra)." />";
	}
}

// ------------------------------------------------------------------------

/**
 * Number Field
 *
 * Identical to the input function but adds the "number" type
 *
 * @access	public
 * @param	mixed
 * @param	string
 * @param	mixed
 * @return	string
 */
if ( ! function_exists('form_number'))
{
	function form_number($data = '', $value = '', $extra = '')
	{
		$defaults = array('type' => 'number', 'name' => (( ! is_array($data)) ? $data : ''), 'value' => $value);

		return "<input "._parse_form_attributes($data, $defaults)._parse_extras($extra)." />";
	}
}

// ------------------------------------------------------------------------

/**
 * Range Field
 *
 * Identical to the input function but adds the "range" type
 *
 * @access	public
 * @param	mixed
 * @param	string
 * @param	mixed
 * @return	string
 */
if ( ! function_exists('form_range'))
{
	function form_range($data = '', $value = '', $extra = '')
	{
		$defaults = array('type' => 'range', 'name' => (( ! is_array($data)) ? $data : ''), 'value' => $value);

		return "<input "._parse_form_attributes($data, $defaults)._parse_extras($extra)." />";
	}
}

// ------------------------------------------------------------------------

/**
 * Date Field
 *
 * Identical to the input function but adds the "email" type
 *
 * @access	public
 * @param	mixed
 * @param	string
 * @param	mixed
 * @return	string
 */
if ( ! function_exists('form_date'))
{
	function form_date($data = '', $value = '', $extra = '')
	{
		$defaults = array('type' => 'date', 'name' => (( ! is_array($data)) ? $data : ''), 'value' => $value);

		return "<input "._parse_form_attributes($data, $defaults)._parse_extras($extra)." />";
	}
}

// ------------------------------------------------------------------------

/**
 * Month Field
 *
 * Identical to the input function but adds the "month" type
 *
 * @access	public
 * @param	mixed
 * @param	string
 * @param	mixed
 * @return	string
 */
if ( ! function_exists('form_month'))
{
	function form_month($data = '', $value = '', $extra = '')
	{
		$defaults = array('type' => 'month', 'name' => (( ! is_array($data)) ? $data : ''), 'value' => $value);

		return "<input "._parse_form_attributes($data, $defaults)._parse_extras($extra)." />";
	}
}

// ------------------------------------------------------------------------

/**
 * Week Field
 *
 * Identical to the input function but adds the "week" type
 *
 * @access	public
 * @param	mixed
 * @param	string
 * @param	mixed
 * @return	string
 */
if ( ! function_exists('form_week'))
{
	function form_week($data = '', $value = '', $extra = '')
	{
		$defaults = array('type' => 'week', 'name' => (( ! is_array($data)) ? $data : ''), 'value' => $value);

		return "<input "._parse_form_attributes($data, $defaults)._parse_extras($extra)." />";
	}
}

// ------------------------------------------------------------------------

/**
 * Time Field
 *
 * Identical to the input function but adds the "time" type
 *
 * @access	public
 * @param	mixed
 * @param	string
 * @param	mixed
 * @return	string
 */
if ( ! function_exists('form_time'))
{
	function form_time($data = '', $value = '', $extra = '')
	{
		$defaults = array('type' => 'time', 'name' => (( ! is_array($data)) ? $data : ''), 'value' => $value);

		return "<input "._parse_form_attributes($data, $defaults)._parse_extras($extra)." />";
	}
}

// ------------------------------------------------------------------------

/**
 * Datetime Field
 *
 * Identical to the input function but adds the "datetime" type
 *
 * @access	public
 * @param	mixed
 * @param	string
 * @param	mixed
 * @return	string
 */
if ( ! function_exists('form_datetime'))
{
	function form_datetime($data = '', $value = '', $extra = '')
	{
		$defaults = array('type' => 'datetime', 'name' => (( ! is_array($data)) ? $data : ''), 'value' => $value);

		return "<input "._parse_form_attributes($data, $defaults)._parse_extras($extra)." />";
	}
}

// ------------------------------------------------------------------------

/**
 * Datetime Local Field
 *
 * Identical to the input function but adds the "datetime-local" type
 *
 * @access	public
 * @param	mixed
 * @param	string
 * @param	mixed
 * @return	string
 */
if ( ! function_exists('form_datetime_local'))
{
	function form_datetime_local($data = '', $value = '', $extra = '')
	{
		$defaults = array('type' => 'datetime-local', 'name' => (( ! is_array($data)) ? $data : ''), 'value' => $value);

		return "<input "._parse_form_attributes($data, $defaults)._parse_extras($extra)." />";
	}
}

// ------------------------------------------------------------------------

/**
 * Search Field
 *
 * Identical to the input function but adds the "search" type
 *
 * @access	public
 * @param	mixed
 * @param	string
 * @param	mixed
 * @return	string
 */
if ( ! function_exists('form_search'))
{
	function form_search($data = '', $value = '', $extra = '')
	{
		$defaults = array('type' => 'search', 'name' => (( ! is_array($data)) ? $data : ''), 'value' => $value);

		return "<input "._parse_form_attributes($data, $defaults)._parse_extras($extra)." />";
	}
}

// ------------------------------------------------------------------------

/**
 * Color Field
 *
 * Identical to the input function but adds the "color" type
 *
 * @access	public
 * @param	mixed
 * @param	string
 * @param	mixed
 * @return	string
 */
if ( ! function_exists('form_color'))
{
	function form_color($data = '', $value = '', $extra = '')
	{
		$defaults = array('type' => 'color', 'name' => (( ! is_array($data)) ? $data : ''), 'value' => $value);

		return "<input "._parse_form_attributes($data, $defaults)._parse_extras($extra)." />";
	}
}

// ------------------------------------------------------------------------

/**
 * Keygen
 *
 * Generates <keygen> element
 *
 * @access	public
 * @param	mixed
 * @return	string
 */
if ( ! function_exists('form_keygen'))
{
	function form_keygen($data = '')
	{
		$defaults = array('name' => (( ! is_array($data)) ? $data : ''));

		return "<keygen "._parse_form_attributes($data, $defaults)." />";
	}
}

// ------------------------------------------------------------------------

/**
 * Output
 *
 * Generates <output></output> element
 *
 * @access	public
 * @param	mixed
 * @return	string
 */
if ( ! function_exists('form_output'))
{
	function form_output($data = '')
	{
		$defaults = array('name' => (( ! is_array($data)) ? $data : ''));

		return "<output "._parse_form_attributes($data, $defaults)." /></output>";
	}
}

// ------------------------------------------------------------------------

/**
 * Parse extras
 *
 * Takes an array of extras and spits them back in a string or just returns the string
 *
 * @access	public
 * @param	mixed
 * @return	string
 */
if ( ! function_exists('_parse_extras'))
{
	function _parse_extras( $extras )
	{
		if( ! is_array($extras) )
			return $extras;
		
		$extra_string = null;
		
		foreach( $extras as $extra )
		{
			$extra_string .= $extra . ' ';
		}
	
		return $extra;
	}
}


/* End of file MY_Form_helper.php */
/* Location: ./application/helpers/MY_Form_helper.php */