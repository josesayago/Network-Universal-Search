<?php
/**
 * Network Universal Search
 *
 * @package Network Universal Search
 * @author José SAYAGO <jose.sayago@laelite.info>
 * @internal _config.php
 *
 * Configuration
 *      Default paths and pre-defined variables required by this software.
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
class NETUNSE_Config {
    /**
     * Load Configuration
     */
    function NETUNSE_Config() {
        /**
         * Absolute Paths
         */
        // Upload directory path
        $wp_upload_dir = wp_upload_dir();
        /**
         * Full Paths
         */
        if( !defined( 'NETUNSE_DIR'            ) ) define( 'NETUNSE_DIR',              '/'.basename( dirname( __FILE__ ) ).'/',                     true );
        if( !defined( 'NETUNSE_NAME'           ) ) define( 'NETUNSE_NAME',             'Network Universal Search',                                  true );
        if( !defined( 'NETUNSE_VERSION'        ) ) define( 'NETUNSE_VERSION',          '1.0',                                                       true );
        if( !defined( 'NETUNSE_TEXTDOMAIN'     ) ) define( 'NETUNSE_TEXTDOMAIN',       'netunse',                                                   true );
        if( !defined( 'NETUNSE_TRANSIENT'      ) ) define( 'NETUNSE_TRANSIENT',        'NETUNSE_data_',                                             true );
        if( !defined( 'NETUNSE_ROOT'           ) ) define( 'NETUNSE_ROOT',             dirname( __FILE__ ),                                         true );
        if( !defined( 'NETUNSE_THEMES'         ) ) define( 'NETUNSE_THEMES',           NETUNSE_ROOT . '/themes/',                                   true );
        if( !defined( 'NETUNSE_THEMES_FOLDER'  ) ) define( 'NETUNSE_THEMES_FOLDER',    'NETUNSE_themes',                                            true );
        if( !defined( 'NETUNSE_THEMES_PATH'    ) ) define( 'NETUNSE_THEMES_PATH',      $wp_upload_dir['basedir'].'/'. NETUNSE_THEMES_FOLDER .'/',   true );
        if( !defined( 'NETUNSE_CORE'           ) ) define( 'NETUNSE_CORE',             NETUNSE_ROOT . '/core/',                                     true );
        if( !defined( 'NETUNSE_INCLUDES'       ) ) define( 'NETUNSE_INCLUDES',         NETUNSE_CORE . 'includes/',                                  true );
        if( !defined( 'NETUNSE_FUNCTIONS'      ) ) define( 'NETUNSE_FUNCTIONS',        NETUNSE_CORE . 'includes/functions/',                        true );
        if( !defined( 'NETUNSE_STYLES'         ) ) define( 'NETUNSE_STYLES',           NETUNSE_CORE . 'includes/styles/',                           true );
        if( !defined( 'NETUNSE_LIBRARIES'      ) ) define( 'NETUNSE_LIBRARIES',        NETUNSE_CORE . 'libraries/',                                 true );
        if( !defined( 'NETUNSE_JS'             ) ) define( 'NETUNSE_JS',               NETUNSE_CORE . 'libraries/js/',                              true );
        if( !defined( 'NETUNSE_LANGUAGES'      ) ) define( 'NETUNSE_LANGUAGES',        NETUNSE_CORE . 'languages/',                                 true );
        if( !defined( 'NETUNSE_ACTIVE_THEME'   ) ) define( 'NETUNSE_ACTIVE_THEME',     get_option( 'netunse_theme', 'universal', true ),            true );
        /**
         * Relative Paths
         */
        if( !defined( 'NETUNSE_CORE_REL'       ) ) define( 'NETUNSE_CORE_REL',         'core/',                                                     true );
        if( !defined( 'NETUNSE_INCLUDES_REL'   ) ) define( 'NETUNSE_INCLUDES_REL',     'includes/',                                                 true );
        if( !defined( 'NETUNSE_FUNCTIONS_REL'  ) ) define( 'NETUNSE_FUNCTIONS_REL',    'includes/functions/',                                       true );
        if( !defined( 'NETUNSE_STYLES_REL'     ) ) define( 'NETUNSE_STYLES_REL',       'includes/styles/',                                          true );
        if( !defined( 'NETUNSE_LIBRARIES_REL'  ) ) define( 'NETUNSE_LIBRARIES_REL',    'libraries/',                                                true );
        if( !defined( 'NETUNSE_JS_REL'         ) ) define( 'NETUNSE_JS_REL',           'libraries/js/',                                             true );
        if( !defined( 'NETUNSE_LANGUAGES_REL'  ) ) define( 'NETUNSE_LANGUAGES_REL',    'languages/',                                                true );
        if( !defined( 'NETUNSE_THEMES_REL'     ) ) define( 'NETUNSE_THEMES_REL',       'themes/',                                                   true );
        if( !defined( 'NETUNSE_THEMES_PATH_REL') ) define( 'NETUNSE_THEMES_PATH_REL',  $wp_upload_dir['baseurl'].'/'. NETUNSE_THEMES_FOLDER .'/',   true );
    }
}
?>