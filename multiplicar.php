<!DOCTYPE html>
<html>
<head>
<metacharset="utf-8">
<title></title>
</head>
<body>

<ul>
<?php
//Creación del array con claves y sus elementos.
$tablas=[
"primera"=>5,
"segunda"=>13,
"tercera"=>11,
];
/*Estructura foreach, donde mediante $claves accedemos a las claves del array (primera, segunda y tercera)
y mediante la variable $elementos accedemos a los elementos del array (5, 13 y 11) */
foreach ($tablas as $claves => $elementos) {
}
/*El bucle for realiza las multiplicaciones donde i=1 y llegaría hasta 10 ya que se indica que solamente se muestren hasta el 10
Todo el código se encuentra posicionado entre etiquetas de html para la creación de la tabla. Cada for se encarga de una tablas
Para acceder a los datos de las claves (elementos) se indica el nombre del array y la posición donde se encuentra su elemento
es decir, colocando el nombre de la clave donde se encuentra el elemento entre corchetes.
*/
echo "<table border='1'>";
echo "<tr style='background-color: #87F3E1'><th>Primera Tabla</tr></br>";
for ($i=1; $i<11;$i++) {
  echo "<tr>";
  $r=$tablas["primera"] * $i;
  echo "<td>".$tablas["primera"]." * ".$i." = ". $r."</td>";
    echo "</tr>";
}
echo "<tr style='background-color: #87F3E1'><th>Segunda Tabla</th></tr>";
for ($j=1; $j<11;$j++) {
  echo "<tr>";
  $r2=$tablas["segunda"] * $j;
  echo "<td>".$tablas["segunda"]." * ".$j." = ". $r2."</td>";
  echo "</tr>";
}
echo "<tr style='background-color: #87F3E1'><th>Tercera Tabla</th></tr>";
for ($z=1; $z<11;$z++) {
  echo "<tr>";
  $r3=$tablas["tercera"] * $z;
  echo "<td>".$tablas["tercera"]." * ".$z." = ". $r3."</td>";
  echo "</tr>";
}
echo "</table>";
?>
</ul>
</body>
</html>
