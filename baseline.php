<?php
ini_set('display_errors', 1);
//error_reporting(E_ERROR | E_PARSE);
error_reporting(-1);

//define ('SITE_ROOT',$_SERVER['DOCUMENT_ROOT'].'/github/salmastro');
define ('SITE_ROOT',$_SERVER['DOCUMENT_ROOT'].dirname($_SERVER['PHP_SELF']));

include_once (SITE_ROOT.'/classi/main_func.php');

if (isset($_SERVER['HTTPS']) &&
    ($_SERVER['HTTPS'] == 'on' || $_SERVER['HTTPS'] == 1) ||
    isset($_SERVER['HTTP_X_FORWARDED_PROTO']) &&
    $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https') {
  $protocol = 'https://';
}
else {
  $protocol = 'http://';
}

define ('SITE_URL',$protocol.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']));


?>