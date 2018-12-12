<?php
/**
 * A Cookie toolkit Extra for MODX Revolution.
 *
 * @author David Pede <dev@tasian.media>
 * @version 1.0.3-pl
 * @released September 29, 2016
 * @since April 23, 2014
 * @package cookiejar
 * @snippet getcookie
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
$tpl = !empty($tpl) ? $tpl : '';
$toPlaceholder = !empty($toPlaceholder) ? $toPlaceholder : '';

$output = '';

if (isset($name) && isset($_COOKIE[$name])) {
    $cookie = htmlspecialchars($_COOKIE[$name]);
    if (empty($tpl) && $toPlaceholder === 'value') {
        $output = $cookie;
    } else {
        if (!empty($toPlaceholder)) {
            $modx->setPlaceholder($toPlaceholder, $cookie);
        }
        if (!empty($tpl)) {
            $ph = $modx->setPlaceholder($toPlaceholder, $cookie);
            $output = $modx->getChunk($tpl);
        }
    }
} else {
    $modx->log(xPDO::LOG_LEVEL_ERROR, "[[getCookie]] - Cookie with name '{$name}' not recognised.");
}

return $output;
