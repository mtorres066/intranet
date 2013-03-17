<?php
	include("ingreso/config.php");
	if($_SESSION["logeado"] == "SI"){ 
		header ("Location: ingreso/inicio.php");
		}
?>
<HTML>
<HEAD>
	<title>Formulario de Pedido de Libros</title>
</HEAD>
<body>
	<h1>Librer&iacute;a OnLine</h1>
	<h2>Resumen del Pedido</h2>
<?php
	echo "<p>Hola Mundo. Mi primer PHP ";
	echo date("j/m/Y,H:i ");
	echo "<br>";
	
	//Comprobacion del envio del nombre de usuario y password
	$nombreusuario=htmlentities($_POST['nombreusuario']);
	
    //$claveusuario=md5($_POST['claveusuario']); --Cuando se utiliza los simbolos ****
	$claveusuario=htmlentities($_POST['claveusuario']);
	
    //Muestra en pantalla
	echo "<p>Usuario: ".$nombreusuario;
	echo "<p>Clave: ".$claveusuario;

?>
</body>
	</HTML>