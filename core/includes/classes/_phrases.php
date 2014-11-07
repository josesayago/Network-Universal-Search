<?php
/**
 * Network Universal Search
 *
 * @package Network Universal Search
 * @author José SAYAGO <jose.sayago@laelite.info>
 * @internal _phrases.php
 *
 * Phrases
 *      Class providing default strings for all core elements.
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
class NETUNSE_Phrases {
    /**
     * Phrases Variables
     *
     * @var array $excerpts Phrases used in excerpts function
     */
    protected $phrases;
    /**
     * Core Phrases
     *
     * All phrases used in core functions.
     * @param array $excerpts Contains a list of phrases used in excerpts
     * @return object $excerpts Object containing all Phrases
     */
    public function core() {
        // Phrases
        $phrases = apply_filters( 'netunse_custom_core_phrase', array(
            'results_title'     => __( 'Search Results',  NETUNSE_TEXTDOMAIN ),
            'stopwords'         => __( 'about,an,are,as,at,be,by,com,for,from,how,in,is,it,of,on,or,that,the,this,to,was,what,when,where,who,will,with,www', NETUNSE_TEXTDOMAIN ),
        ) );
        /**
         * WPML Support
         */
        if ( function_exists( 'icl_translate' ) ) {
            foreach( $phrases as $field => $string ) {
                $phrases[$field] = icl_translate( NETUNSE_TEXTDOMAIN, $field, $string );
            }
        }
        // Array to Object
        $phrases = json_decode( json_encode( $phrases ) );
        // Return object
        return $phrases;
    }
}
?>