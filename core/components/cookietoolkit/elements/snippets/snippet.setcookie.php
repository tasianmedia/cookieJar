<?php
/**
 * A Cookie management Extra for MODX Revolution.
 *
 * @author David Pede <dev@tasianmedia.com> <https://twitter.com/davepede>
 * @version 1.0.0-pl
 * @released April 23, 2014
 * @since April 23, 2014
 * @package cookietoolkit
 *
 * Copyright (C) 2014 David Pede. All rights reserved. <dev@tasianmedia.com>
 *
 * cookieToolkit is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or any later version.
 *
 * cookieToolkit is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * cookieToolkit; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 */

/* set default properties */
$name = !empty($name) ? $name : '';
$value = !empty($value) ? $value : '';
$expires = !empty($expires) ? $expires : '';
$path = !empty($path) ? $path : '';
$domain = !empty($domain) ? $domain : '';
$secure = !empty($secure) ? $secure : '';
$httponly = !empty($httponly) ? $httponly : '';

$output = '';

$output = setcookie($name,$value,$expires,$path,$domain,$secure,$httponly);

return $output;