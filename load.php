<?php
//include (__DIR__.'/../baseline.php');
include ('baseline.php');
require_once (SITE_ROOT.'/classi/salmastro.php');

$param=$_POST['param'];

//echo __DIR__;
//echo json_encode($_REQUEST);

//if (isset($_REQUEST['param'])) $param['today']=$_REQUEST['param']['today'];
//(else die('NO DATA');

$sal=new Salmastro($param);
$sal->build();

$sal->load();

?>