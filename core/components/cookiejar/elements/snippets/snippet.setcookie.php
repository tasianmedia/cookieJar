<?php
/**
 * A Cookie toolkit Extra for MODX Revolution.
 *
 * @author David Pede <dev@tasianmedia.com> <https://twitter.com/davepede>
 * @version 1.0.0-pl
 * @released April 23, 2014
 * @since April 23, 2014
 * @package cookiejar
 *
 * Copyright (C) 2014 David Pede. All rights reserved. <dev@tasianmedia.com>
 *
 * cookieJar is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or any later version.
 *
 * cookieJar is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * cookieJar; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 */

/* set default properties */
$name = !empty($name) ? $name : '';
$value = !empty($value) ? explode(',', $value) : ''; // Receives CSV list, converts to array.
$expires = !empty($expires) ? $expires : '0';
$path = !empty($path) ? $path : '/';
$domain = !empty($domain) ? $domain : '';
$secure = !empty($secure) ? $secure : '0';
$httponly = !empty($httponly) ? $httponly : '1';

$output = '';

setcookie($name,implode(',', $value),strtotime($expires),$path,$domain,$secure,$httponly);

return '';