<?php
include("config.php");
    // Primero comprobamos que ningún campo esté vacío y que todos los campos existan.
    if(isset($_POST["username"]) && !empty($_POST["username"]) &&
    isset($_POST["password"]) && !empty($_POST["password"]) &&
    isset ($_POST["email"]) && !empty($_POST["email"])) {
        // Si entramos es que todo se ha realizado correctamente
		$password 			= md5($_POST["password"]);		
		$username 			= htmlentities($_POST["username"]);
		$nombreusuario 		= htmlentities($_POST["nombreusuario"]);
		$codusuario 		= htmlentities($_POST["codusuario"]);
		$deptousuario 		= htmlentities($_POST["deptousuario"]);
		$plantausuario 		= htmlentities($_POST["plantausuario"]);
		$permisosusuario 	= htmlentities($_POST["permisosusuario"]);
		$id_extreme 		= "";
		$mail 				= htmlentities($_POST["email"]);
		
        $link = mysql_connect ($dbhost, $dbusername, $dbuserpass);
        mysql_select_db($dbname,$link);
		
		$queEmp = "SELECT username FROM usuarios WHERE username='$username'";
		$resEmp = mysql_query($queEmp, $link) or die(mysql_error());
		$totEmp = mysql_num_rows($resEmp);
		if($totEmp > 0){
		echo "Nombre de usuario no disponible";
		exit();
		}
		
		$queEmp = "SELECT email FROM usuarios WHERE email='$mail'";
		$resEmp = mysql_query($queEmp, $link) or die(mysql_error());
		$totEmp = mysql_num_rows($resEmp);
		if($totEmp > 0){
		echo "El mail ingresado no esta disponible";
		exit();
		}
		
        // Con esta sentencia SQL insertaremos los datos en la base de datos
        mysql_query("INSERT INTO 	usuarios (codusuario, username, nombreusuario, 
        							password, deptousuario, plantausuario, permisosusuario,
									id_extreme, email)
        			VALUES 
        							('{$codusuario}','{$username}','{$nombreusuario}','{$password}',
        							'{$deptousuario}','{$plantausuario}','{$permisosusuario}','{$id_extreme}',
        							'{$mail}')",$link);

        // Ahora comprobaremos que todo ha ido correctamente
        $my_error = mysql_error($link);

        if(!empty($my_error)) {

            echo "Ha habido un error al insertar los valores. $my_error";

        } else {

            echo "Los datos han sido introducidos satisfactoriamente";

        }

    } else {

        echo "Error, no ha introducido todos los datos";

    }

?>