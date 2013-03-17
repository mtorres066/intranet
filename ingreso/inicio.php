<?php
//Se define los parametros para el DEBUG con Firebug y FirePHP
require_once('../FirePHPCore/FirePHP.class.php');
ob_start();
// Definimos el Objeto para uso en depuracion firePHP
$mifirephp = FirePHP::getInstance(true);
include("config.php");
if($_SESSION["logeado"] != "SI"){
header ("Location: index.php");
exit;
}
// Depurando
$mifirephp->log($dbhost, "servidor");
$mifirephp->log($dbusername, "usermysql");
$mifirephp->log($dbuserpass, "passmysql");
$mifirephp->log($username, "usuario");
?>

USTED ESTA LOGEADO !!!
</br>
</br>
<a href="cerrar.php">Cerrar sesi&oacute;n</a>