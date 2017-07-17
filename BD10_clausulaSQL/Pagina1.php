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
$registros=mysql_query("select count(alu.codigo) as     
    cantidad,nombre_curso from alumnos as alu
    inner join cursos as cur on cur.id_curso=alu.codigocurso
    group by alu.codigocurso",  
           $conexion) or
  die("Problemas en el select:".mysql_error());
while ($reg=mysql_fetch_array($registros))
{
  echo "Nombre del curso:".$reg['nombre_curso']."<br>";
  echo "Cantidad de inscriptos:".$reg['cantidad']."<br>";
  echo "<hr>";
}
mysql_close($conexion);
?>
</body>
</html>