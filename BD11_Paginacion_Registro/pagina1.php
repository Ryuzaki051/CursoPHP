<?php
if (isset($_REQUEST['pos']))
  $inicio=$_REQUEST['pos'];
else
  $inicio=0;
?>
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
$registros=mysql_query("select alu.codigo as 
                       codigo,nombre,mail,codigocurso, 
                       nombre_curso from alumnos as alu
                       inner join cursos as cur on cur.id_curso=alu.codigocurso
                       limit $inicio,2", $conexion) or
  die("Problemas en el select:".mysql_error());
$impresos=0;
while ($reg=mysql_fetch_array($registros))
{
  $impresos++;
  echo "Codigo:".$reg['codigo']."<br>";
  echo "Nombre:".$reg['nombre']."<br>";
  echo "Mail:".$reg['mail']."<br>";
  echo "Curso:".$reg['nombre_curso']."<br>";
  echo "<hr>";
}
mysql_close($conexion);
if ($inicio==0)
  echo "anteriores ";
else
{
  $anterior=$inicio-2;
  echo "<a href=\"pagina1.php?pos=$anterior\">Anteriores </a>";
}
if ($impresos==2)
{
  $proximo=$inicio+2;
  echo "<a href=\"pagina1.php?pos=$proximo\">Siguientes</a>";
}
else
  echo "siguientes";
?>
</body>
</html> 