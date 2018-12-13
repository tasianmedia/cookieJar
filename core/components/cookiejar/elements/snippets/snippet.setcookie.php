<?php
/**
 * A Cookie toolkit Extra for MODX Revolution.
 *
 * @author David Pede <dev@tasian.media>
 * @version 1.1.0-pl
 * @released December 13, 2018
 * @since April 23, 2014
 * @package cookiejar
 * @snippet setcookie
 *
 * Copyright (C) 2018 Tasian Media. All rights reserved. <studio@tasian.media>
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
 *
 * @var modX $modx
 * @var array $scriptProperties
 */

/* set default properties */
$name = !empty($name) ? $name : '';
$value = !empty($value) ? $value : '';
$expires = !empty($expires) ? $expires : '';
$expiresType = !empty($expiresType) ? $expiresType : '';
$path = !empty($path) ? $path : '';
$domain = !empty($domain) ? $domain : '';
$secure = !empty($secure) ? $secure : '';
$httponly = !empty($httponly) ? $httponly : '';

if (isset($name)) {
    try {
        //format expires
        if ($expires < 0) {
            $expires = time() + $expires;
        } elseif ($expires) {
            switch ($expiresType) {
                case 'seconds':
                    $spec = 'PT' . $expires . 'S';
                    break;
                case 'minutes':
                    $spec = 'PT' . $expires . 'M';
                    break;
                case 'hours':
                    $spec = 'PT' . $expires . 'H';
                    break;
                case 'days':
                    $spec = 'P' . $expires . 'D';
                    break;
                case 'weeks':
                    $spec = 'P' . $expires . 'W';
                    break;
                case 'months':
                    $spec = 'P' . $expires . 'M';
                    break;
                case 'years':
                    $spec = 'P' . $expires . 'Y';
                    break;
                default:
                    throw new Exception("Cookie expires type '{$expiresType}' is invalid. Please provide a valid type in your snippet call.");
            }
            $interval = new DateInterval($spec);
            $now = new DateTime();
            $diff = $now->add($interval);
            $expires = $diff->format('U');
        }
        //set cookie
        $success = setcookie($name, $value, intval($expires), $path, $domain, $secure, $httponly);
        if ($success) {
            $_COOKIE[$name] = $value;
        } else {
            $modx->log(modX::LOG_LEVEL_ERROR, "[[setCookie]] Cookie with name '{$name}' not set.");
        }
    } catch (Exception $e) {
        $modx->log(modX::LOG_LEVEL_ERROR, '[[setCookie]] ' . $e->getMessage());
    }
} else {
    $modx->log(modX::LOG_LEVEL_ERROR, '[[setCookie]] Cookie name is not specified. Please provide a name in your snippet call.');
}

return '';
