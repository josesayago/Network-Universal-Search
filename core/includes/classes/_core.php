<?php
/**
 * Network Universal Search
 *
 * @package Network Universal Search
 * @author José SAYAGO <jose.sayago@laelite.info>
 * @internal _core.php
 *
 * Core
 *      Main application functionality.
 */
/*  LICENSE

    Copyright (C) 2007 - 2014  L'Elite de José SAYAGO

    'Network Universal Search' is an unregistered trademark of L'Elite, 
    and cannot be re-used in conjunction with the GPL v2 usage of this 
    software  under the license terms of the GPL v2 without permission.

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 */
class NETUNSE_Core {
    /**
     * Constructor
     *
     * Default parameters can be overriden using
     * WordPress pre-filter functions.
     *
     * To override default options use the
     * netunse_custom_default_parameters filter.
     *
     * Example:
     * 1.- Create a custom function:
     *      function my_custom_parameters() {
     *          $default = array(
     *              'results_title' => 'Results'
     *          );
     *          return $default;
     *      }
     * 2.- Pre-filter function:
     *      add_filter( 'netunse_custom_defaults', 'my_custom_parameters' );
     *
     * @return array $default Default parameters
     */
    public function NETUNSE_Core() {
        $strings = new NETUNSE_Phrases();
        $defaults = apply_filters( 'netunse_custom_defaults', array(
            'results_title'     => $strings->core->()->results_title,
            'paginate'          => 'yes',
            'blog_include'      => 'all',
            'blog_exclude'      => 'none',
            'author_include'    => 'all',
            'author_exclude'    => 'none',

        ) );
    }
}
?>