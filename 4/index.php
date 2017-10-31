<?php
//Inicio variables de sesion
      session_start();
      //Compruebo si han pulsado el boton preguntando por el name de mi boton submit
      if (isset($_POST) &&
          !empty($_POST['ataque'])) {
         $_SESSION['ataque'] = rand(1,6);
         header("Location:./defensa.php");
      }
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ataque</title>
  </head>
  <body>
    <h1>Juego dados</h1>
    <h2>Ataque</h2>
    <form class="" action="<?php $_SERVER['PHP_SELF']?>" method="post">
      <input type="submit" name="ataque" value="Atacar">
    </form>
  </body>
</html>
