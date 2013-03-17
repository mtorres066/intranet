<?php
include("config.php");
if($_SESSION["logeado"] == "SI"){ 
header ("Location: inicio.php");
}
?>
<html>
<head>
<title>Formulario de Registro</title>
</head>

<body>
<form name="form1" method="post" action="insertar.php">
  Username:<br>
  <label>
  <input name="username" type="text" id="username">
  </label>
  <p># Empleado:<br>
    <label>
      <input name="codusuario" type="text" id="codusuario">
    </label>
  </p>
  <p>Password:<br>
    <label>
      <input name="password" type="password" id="password">
    </label>
  </p>
  <p>Email:<br>
    <label>
      <input name="email" type="text" id="email">
    </label>
  </p>
  <p>Nombre Completo:<br>
    <label>
      <input name="nombreusuario" type="text" id="nombreusuario">
    </label>
  </p>
  <p>Departamento:<br>
    <label>
      <input name="deptousuario" type="text" id="deptousuario">
    </label>
  </p>
  <p>Sitio Planta:<br>
    <label>
      <input name="plantausuario" type="text" id="plantausuario">
    </label>
  </p>
  <p>Permisos:<br>
    <label>
      <input name="permisosusuario" type="text" id="permisosusuario">
    </label>
  </p>
  <p>
    <label></label>
    <label>
    <input type="submit" name="Submit" value="Enviar Registro">
    </label>
  </p>
</form>
</body>
</html>