<?php
/**
 * A Cookie toolkit Extra for MODX Revolution.
 *
 * @author David Pede <dev@tasian.media> <https://twitter.com/davepede>
 * @version 1.0.2-pl
 * @released July 12, 2016
 * @since April 23, 2014
 * @package cookiejar
 * @snippet setcookie
 *
 * Copyright (C) 2016 David Pede. All rights reserved. <dev@tasian.media>
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
$value = !empty($value) ? $value : '';
$expires = !empty($expires) ? time()+$expires : '';
$path = !empty($path) ? $path : '';
$domain = !empty($domain) ? $domain : '';
$secure = !empty($secure) ? $secure : '';
$httponly = !empty($httponly) ? $httponly : '';

$output = '';

if(isset($name)) {
  setcookie($name,$value,intval($expires),$path,$domain,$secure,$httponly);
}else{
  $modx->log(modX::LOG_LEVEL_ERROR, 'setCookie() - &name is required');
}
return '';