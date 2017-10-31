<?php
      session_start();
      // Creo una variable donde guardare la imagen de la cara del dado correspondiente concatenando el valor de $_SESSION
      // con .jpg
      $ataque = '<img src="./img/'.$_SESSION['ataque'].'.jpg" style="max-width:100%;" />';
      $defensa = '<img src="./img/'.$_SESSION['defensa'].'.jpg" style="max-width:100%;" />';


 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ataque</title>
  </head>
  <body>
    <h1>Juego dados</h1>
    <h2>Resultados: <?php
    // Compruebo que no es un empate
    if($_SESSION['defensa'] != $_SESSION['ataque'])
    {
      //De no serlo calculo si defensa es menor a ataque para ordenar los numeros y que no hayan negativos.
      // No es lo mismo  5 - 2 = 3 que 2 - 5 = -3
      if($_SESSION['defensa'] < $_SESSION['ataque'])
      {
        //Calculo la diferencia y expongo al ganador.
        $diferencia = $_SESSION['ataque'] - $_SESSION['defensa'];
        echo "Ataque gana por ".$diferencia;
      }
      else {
        $diferencia = $_SESSION['defensa'] - $_SESSION['ataque'];
        echo "Defensa gana por ". $diferencia;
      }
    }
    else {
      //De ser igual la defensa al ataque se declara la partida en empate.
      echo "empate";
    }

    ?></h2>
    <div style="width:1080px;">
      <div style="width:50%;float:left;height:400px;">
        <?php
        //Muestro la imagen de ataque
        echo $ataque?>
      </div>
      <div style="width:50%;float:left; height:400px;">
        <?php
        // Muestro la imagen de defensa
        echo $defensa?>
      </div>
    </div>
    <p><a href="./salir.php">Salir</a></p>
  </body>
</html>
