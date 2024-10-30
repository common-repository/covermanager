<?php
/**
 * @package CoverManager
 */
/*
Plugin Name: CoverManager
Plugin URI: https://www.covermanager.com
Description: Shortcode [covermanager restaurant="" language="" template="" ]
Version: 0.0.1
Author: CarlosPf
Author URI: http://covermanager.com/
License: GPLv2 or later
*/

/*  Copyright 2014  Carlos Perez Fernandez  (email : carlospf@aunbit.com)

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

// Area de producto en shortcode
function covermanager($atts ){
    $extra = '?';
	extract( shortcode_atts( array(
	    'restaurant' => 'covermanager',
	    'language' => 'spanish',
	    'template' => '',
	    'height' => '560',
	    'width' => '100%'
	), $atts ) );
	/*if(array_key_exists('source',$_COOKIE)){
	    $extra = '?source='.$_GET['source'];
	}*/
	if(array_key_exists('source', $_GET)){
	    $extra .= 'source='.$_GET['source'].'&';
	    //setcookie('source', $_GET['source'], time()+3600);
	}
	if($template != ''){
	    $extra .= 'template='.$template.'&';
	}
	
	return '<iframe title="Reservas" src="https://www.covermanager.com/reservation/module_restaurant/'.$restaurant.'/'.$language.$extra.'" frameborder="0" height="'.$height.'" width="'.$width.'"></iframe>';
}
add_shortcode( 'covermanager', 'covermanager' );

?>