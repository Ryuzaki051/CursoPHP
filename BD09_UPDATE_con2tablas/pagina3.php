<html>
<head>
<title>Problema</title>
</head>
<body>
<?php

	$conexion=mysql_connect("localhost","alex","example") or die("Problemas en la conexion");

	mysql_select_db("ejercicios",$conexion) or die("Problemas en la selección de la base de datos");

	$registros=mysql_query("update alumnos set codigocurso=$_REQUEST[codigocurso]
	 where mail='$_REQUEST[mailviejo]'",$conexion) or die("Problemas en el select:".mysql_error());

  	echo "El curso fue modificado con exito";
?>
</body>
</html>