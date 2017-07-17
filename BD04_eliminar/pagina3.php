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
mysql_query("delete from alumnos",$conexion) or
  die("Problemas en el select:".mysql_error());
echo "Se efectuó el borrado de todos los alumnos.";
mysql_close($conexion);
?>
</body>
</html>