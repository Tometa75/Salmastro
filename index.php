<?php
include ('baseline.php');
include_once ('classi/salmastro.php');

$param=array();

if (isset($_REQUEST['today'])) $param['today']=$_REQUEST['today'];
if (isset($_REQUEST['ora'])) $param['config']['ora']=$_REQUEST['ora'];
if (isset($_REQUEST['festa'])) $param['config']['festa']=$_REQUEST['festa'];
if (isset($_REQUEST['mix'])) $param['config']['mix']=$_REQUEST['mix'];
if (isset($_REQUEST['inv'])) $param['config']['inv']=$_REQUEST['inv'];
if (isset($_REQUEST['contesto'])) $param['config']['contesto']=$_REQUEST['contesto'];

if (isset($param['today']) && $param['today']=='xxxxxxxx') $param['today']=date('Ymd');

$sal=new Salmastro($param);
$sal->build();

?>
<!DOCTYPE html>
<html lang="it">

<html>

<head>
   <meta http-equiv="Content-Type" content="text/html;charset=utf-8" >
   <meta name="viewport" content="width=device-width, initial-scale=1.0" >
   <script type="text/javascript" src="core/calendario/calnav.js?v=<?php echo time(); ?>"></script>
   <script type="text/javascript" src="jquery-1.10.2.js"></script>
   <script type="text/javascript" src="code.js?v=<?php echo time(); ?>"></script>
   <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>" >
   <link rel="stylesheet" href="core/calendario/calnav.css?v=<?php echo time(); ?>" >
</head>

<body>

    <div id="salmain" style="" >

        <?php
            $sal->draw();
        ?>

    </div>

</body>

</html>