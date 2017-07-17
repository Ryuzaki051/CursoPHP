<html>
<head>
<title>Problema</title>
</head>
<body>
<?php
$conexion=mysql_connect("localhost","alex","example") or
  die("Problemas en la conexion");
mysql_select_db("ejercicios",$conexion) or
  die("Problemas en la selección de la base de datos");
$registros=mysql_query("select codigo,nombre,mail from alumnos
                        where mail='$_REQUEST[mail]'",$conexion) or
  die("Problemas en el select:".mysql_error());
  
  if($regc=mysql_fetch_array($registros)){
	  echo "Nombre: ".$regc['nombre']." <br/>";
	  echo "Correo: ".$regc['mail'];
	  echo "<br/>";
	  echo "Deseas Eliminar este registro?";
	  
  }
 
  /*
if ($reg=mysql_fetch_array($registros))
{
  mysql_query("delete from alumnos where mail='$_REQUEST[mail]'",$conexion) or
    die("Problemas en el select:".mysql_error());
  echo "Se efectu&oacute; el borrado del alumno con dicho mail.";
}
else
{
  echo "No existe un alumno con ese mail.";
}*/
mysql_close($conexion);
?>
</body>
</html>
