<?php
/**
 * @package CampsiteFinder
 * @version 0.0.1
 */

/*
Plugin Name: Campsite Finder
Plugin URI: https://jonwinn.com/wordpress-plugins/campsite-finder
Description: 
Version: 0.0.1
Author: Jon Winn
Author URI: https://jonwinn.com/wordpress-plugins
License: GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Domain Path: /languages

This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program. If not, see https://www.gnu.org/licenses/gpl-2.0.html.
*/

// ensure no info is exposed if called directly
if ( !function_exists( 'add_action' ) ) {
  echo "This is a just a plugin, and being a plugin,"
    . " cannot do much when called directly.";
  exit(1);
}

define( '', '' );

register_activation_hook( __FILE__,
  array( 'CampsiteFinder', 'plugin_activation' ) );
register_deactivation_hook( __FILE__,
  array( 'CampsiteFinder', 'plugin_deactivation' ) );
register_uninstall_hook( __FILE__,
  array( 'CampsiteFinder', 'plugin_uninstall' ) );

