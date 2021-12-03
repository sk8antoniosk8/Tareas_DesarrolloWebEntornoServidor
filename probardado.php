<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h3>
    <?php
      /*Con la función include se incorpora el fichero clasedado.php creado anteriormente en este fichero, de manera que
       dentro de la etiqueta php lee primero el fichero clasedado.php y después continúa leyendo el código creado en este fichero.*/
      include 'clasedado.php';
      //Con la función new se crea un objeto perteneciente a la clase dado.
      $dado1 = new dado();
      /*Dentro del bucle for indicamos que empiece a contar desde 1 (tirada número1) y repita el proceso hasta 12 tiradas,
      luego que nos imprima por pantalla el número de tirada que se realiza y el resultado de esa tirada que será una llamada
      al método tirar dado creado en el fichero anterior que nos dará un valor aleatorio entre 0 y 13.*/
      for ($i=1; $i<13; $i++) {
        echo 'Tirada numero '.$i.': ';
        echo $dado1->tirarDado();
        echo '<br>';
      }
    ?>
  </h3>
  </body>
</html>
