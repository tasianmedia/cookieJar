<?php
/**
 * @package cookiejar
 * @snippet setcookie
 *
 * Copyright (C) 2014 David Pede. All rights reserved. <dev@tasianmedia.com>
 *
 * getDate is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or any later version.
 *
 * getDate is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * getDate; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 */
/**
 * @subpackage build
 */
 
$properties = array(
  array(
    'name' => 'name',
    'desc' => 'The name of the cookie. [REQUIRED]',
    'type' => 'textfield',
    'options' => '',
    'value' => '',
  ),
  array(
    'name' => 'value',
    'desc' => 'The value of the cookie. This value is stored on the clients computer, do not store sensitive information.',
    'type' => 'textfield',
    'options' => '',
    'value' => '',
  ),
  array(
    'name' => 'expires',
    'desc' => 'The time the cookie expires. This is a Unix timestamp so is in number of seconds. Use `0` to set a session cookie.',
    'type' => 'integer',
    'options' => '',
    'value' => 0,
  ),
  array(
    'name' => 'path',
    'desc' => 'The path on the server in which the cookie will be available on. Use `/` to make available within the entire domain.',
    'type' => 'textfield',
    'options' => '',
    'value' => '/',
  ),
  array(
    'name' => 'domain',
    'desc' => 'The domain that the cookie is available to.',
    'type' => 'textfield',
    'options' => '',
    'value' => '',
  ),
  array(
    'name' => 'secure',
    'desc' => 'Indicates that the cookie should only be transmitted over a secure HTTPS connection from the client.',
    'type' => 'combo-boolean',
    'options' => '',
    'value' => false,
  ),
  array(
    'name' => 'httponly',
    'desc' => 'When TRUE the cookie will be made accessible only through the HTTP protocol. This means that the cookie wont be accessible by scripting languages, such as JavaScript.',
    'type' => 'combo-boolean',
    'options' => '',
    'value' => false,
  ),
);
return $properties;