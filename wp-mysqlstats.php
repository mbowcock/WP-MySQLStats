<?php
/*
Plugin Name: WP-MySQLStats
Plugin URI: http://mbowcock.com
Description: Displays MySQL stats in the WP admin console
Version: 0.1
Author: Matt Bowcock
Author URI: http://mbowcock.com
 
    Copyright 2009  Matthew Bowcock  (email:matt.bowcock@gmail.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 
*/

add_action('admin_menu', 'mysql_stats');

function mysql_stats(){
	add_options_page('WP-MySQLStats', 'MySQL Stats', 10, __FILE__, 'show_stats');
}

function show_stats(){
	echo '<p>MySQL Stats:</p>';
	$status = explode('  ', mysql_stat());

	foreach($status as $key => $value) {
		echo $value."<br/>";
	}
	
}

?>

