<?php
/*
Plugin Name: Secured Users Front
Plugin URI: http://wordpress.org/plugins/secured-users-front
Description: Secures the backend AND the frontend with ssl when you are logged in
Version: 1
Author: edik
Author URI: http://edik.ch/
License: GPL2

Copyright 2013  Edgard Schmidt  (email : edik@edik.ch)

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

namespace secured_users_front;

class Main {

function __construct () {
	add_action ( 'init', array ( $this, 'force_ssl' ) );
}

function force_ssl () {
	force_ssl_admin ( true ); //secures the login and the cookies

	if ( ! is_user_logged_in () || is_ssl () ) {
		return;
	}
	wp_redirect ( 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'],
		307 );
	exit;
}

}

new Main;
