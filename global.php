<?php
if(!defined('VISIBLE')) { die('You can\'t access this file.'); }

if(isset($_SERVER['HTTP_CF_CONNECTING_IP'])) { $_SERVER['REMOTE_ADDR'] = $_SERVER['HTTP_CF_CONNECTING_IP']; }

define('CLASS_DIR', 'classes/');
define('TPL_DIR', 'tpl/');
define('MYSQL_CLASS_DIR', 'mysql/');

require_once CLASS_DIR . 'class.core.php';
require_once CLASS_DIR . 'class.tpl.php';
require_once CLASS_DIR . 'class.mysql.php';

require_once CLASS_DIR . TPL_DIR . 'class.html.php';

require_once CLASS_DIR . MYSQL_CLASS_DIR . 'class.mysqli.php';

$tpl = new mTemplate\display;
$tpl->page = new mTemplate\html;
$core = new MuffinCMS\core;


session_start();
?>