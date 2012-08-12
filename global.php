<?php
if(!defined('VISIBLE')) { die('You can\'t access this file.'); }

if(isset($_SERVER['HTTP_CF_CONNECTING_IP'])) { $_SERVER['REMOTE_ADDR'] = $_SERVER['HTTP_CF_CONNECTING_IP']; }

define('C', 'classes/');
define('T', 'tpl/');

require_once C . 'class.tpl.php';
<<<<<<< HEAD
require_once C . T . 'class.html.php';
require_once C . 'class.core.php';

$tpl = new mTemplate\display;
$tpl->page = mTemplate\html;
=======
require_once C . 'class.core.php';

$tpl = new mTemplate\display;
>>>>>>> 797dc48765f268da6189a1f7380f816b98debcf6
?>