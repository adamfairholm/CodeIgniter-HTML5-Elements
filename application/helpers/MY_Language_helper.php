<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * CodeIgniter HTML5 Language Helper Extension
 *
 * Extended from the CodeIgniter native Language helper
 * @copyright	Copyright (c) 2006, EllisLab, Inc.
 * @link		http://codeigniter.com
 *
 * Description:
 *
 * This extends the language helper to do some of the language-focused HTML5 things like ruby.
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
 * Ruby
 *
 * Generates ruby sequence
 *
 * @access	public
 * @param	array
 * @param	string
 * @return	string
 */
if ( ! function_exists('ruby'))
{
	function ruby($data = array(), $nested = '')
	{
		if( empty($data) || !is_array($data) )
			return null;
		
		$html = '<ruby>';
		
		if( $nested )
			$html .= '<ruby>';

		foreach( $data as $orig => $sec )
		{
			$html .= $orig . ' <rp>(</rp> <rt>' . $sec . '</rt><rp>)</rp>';
		}		
		
		$html .= '</ruby>';
		
		if( $nested )
			$html .= '<rp>（</rp><rt>' . $nested . '</rt><rp>）</rp></ruby>';
			
		return $html;
	}
}

/* End of file MY_Language_helper.php */
/* Location: ./application/helpers/MY_Language_helper.php */