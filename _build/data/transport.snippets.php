<?php
/**
 * @package cookiejar
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

function getSnippetContent($filename) {
  $o = file_get_contents($filename);
  $o = trim(str_replace(array('<?php','?>'),'',$o));
  return $o;
}

$snippets = array();

$snippets[0]= $modx->newObject('modSnippet');
$snippets[0]->fromArray(array(
  'id' => 0,
  'name' => 'setCookie',
  'description' => 'A simple Cookie writing Snippet for MODX Revolution.',
  'snippet' => getSnippetContent($sources['source_core'].'/elements/snippets/snippet.setcookie.php'),
),'',true,true);
$properties = include $sources['build'].'properties/properties.setcookie.php';
$snippets[0]->setProperties($properties);
unset($properties);

$snippets[1]= $modx->newObject('modSnippet');
$snippets[1]->fromArray(array(
  'id' => 1,
  'name' => 'getCookie',
  'description' => 'A simple Cookie retrieval Snippet for MODX Revolution.',
  'snippet' => getSnippetContent($sources['source_core'].'/elements/snippets/snippet.getcookie.php'),
),'',true,true);
$properties = include $sources['build'].'properties/properties.getcookie.php';
$snippets[1]->setProperties($properties);
unset($properties);

return $snippets;