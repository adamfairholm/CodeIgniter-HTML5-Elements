<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * CodeIgniter HTML5 HTML Helper
 *
 * Extended from the CodeIgniter native HTML helper
 * @copyright	Copyright (c) 2006, EllisLab, Inc.
 * @link		http://codeigniter.com
 *
 * Description:
 *
 * This extends the html helper to do all the cool new HTML5 stuff.
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
 * Video
 *
 * Generates <video> element
 *
 * @access	public
 * @param	mixed
 * @param	string
 * @return	string
 */
if ( ! function_exists('video'))
{
	function video($attr = array(), $no_support_message = 'Your browser does not support the HTML5 video tag')
	{
		return "<video "._parse_attributes($attr).">$no_support_message</video>";
	}
}

// ------------------------------------------------------------------------

/**
 * Parse attributes
 *
 * Parse attributes for HTML elements
 *
 * @access	public
 * @param	mixed
 * @return	string
 */
if ( ! function_exists('_parse_attributes'))
{
	function _parse_attributes($attr = array())
	{
		$html = null;
		
		if( is_array($attr) )
		{
			foreach( $attr as $key => $val )
			{
				$html .= $key . '="' . $val . '" ';
			}		
		
			$html = trim($html);
		}
		
		return $html;
	}
}



/* End of file MY_Html_helper.php */
/* Location: ./application/helpers/MY_Html_helper.php */