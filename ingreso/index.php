<?php
include("config.php");
if($_SESSION["logeado"] == "SI"){ 
header ("Location: inicio.php");
}
?>


<br/>
<br/>
USTED HA INGRESADO CORRECTAMENTE!!

</br>
</br>
<a href="cerrar.php">Cerrar sesi&oacute;n</a>
<!-- 	<span style="color:#000; font-size:12px;">Usuario</span><br>
   <input name="username" type="text" id="username"><br><br>
	<span style="color:#000; font-size:12px;">Contrasenia</span><br>
    <input name="password" type="password" id="password"><br><br>
    <input type="checkbox" name="recordar" id="recordar">
	<span style="color:#000; font-size:12px;">Recordar</span><br />
	<br>
	<span style="font-size: 12px; color: #000"><a href="recuperar.php">Recuperar contrase&ntilde;a</a> | <a href="registrarse.php">Registrarse</a><br />
	</span><br />
     <input type="submit" name="Submit" value="Entrar">
     <br />
</form> 
