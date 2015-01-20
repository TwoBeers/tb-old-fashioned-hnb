<?php
/**
 * Plugin Name: TB Old-fashioned Header and Background
 * Version:     1.1
 * Plugin URI:  https://github.com/TwoBeers/tb-old-fashioned-hnb
 * Author:      TwoBeers Crew
 * Author URI:  http://www.twobeers.net/
 * License:     GPLv2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 * Description: Restores the links to the old-fashioned pages for the custom header and the custom background
 **/

/*
	Copyright (c) 2015 by TwoBeers Crew

	This program is free software; you can redistribute it and/or
	modify it under the terms of the GNU General Public License
	as published by the Free Software Foundation; either version 2
	of the License, or (at your option) any later version.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
	GNU General Public License for more details.

	You should have received a copy of the GNU General Public License
	along with this program; if not, write to the Free Software
	Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
*/

class TBOldFashionedHnB {

	/**
	 * Constructor.
	 */
	function __construct() {
		if ( version_compare( $GLOBALS['wp_version'], '4.1', '>=' ) ) {
			add_action( 'admin_print_styles', array( $this, 'add_css' ) );
			add_action( 'wp_enqueue_scripts', array( $this, 'add_css' ) );
		}
	}

	/**
	 * Outputs CSS as header links
	 */
	public function add_css() {

		wp_enqueue_style( 'tb-old-fashioned-hnb-style', plugins_url( 'style.css', __FILE__ ) );

	}

}

new TBOldFashionedHnB;
