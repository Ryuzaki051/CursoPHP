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
$registros=mysql_query("select * from alumnos
                        where mail='$_REQUEST[mail]'",$conexion) or
  die("Problemas en el select:".mysql_error());
if ($reg=mysql_fetch_array($registros))
{
?>

<form action="pagina3.php" method="post">
Ingrese nuevo mail:
<input type="text" name="mailnuevo" value="<?php echo $reg['mail'] ?>">
<br>
<input type="hidden" name="mailviejo" value="<?php echo $reg['mail'] ?>">
<input type="submit" value="Modificar">
</form>

<?php
}
else
  echo "No existe alumno con dicho mail";
?>
</body>
</html>
