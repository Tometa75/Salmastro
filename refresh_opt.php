<?php
//include (__DIR__.'/../baseline.php');
include ('baseline.php');
require_once(SITE_ROOT.'/classi/calendario.php');
require_once(SITE_ROOT.'/core/calendario/calnav.php');

$param=$_POST['param'];

$cal=new Calendario($param['today']);
$calnav=new calnav($param['risoluzione'],$param['today'],$param['config'],array(),$cal);

$calnav->drawOpt();

//echo json_encode($param);

?>