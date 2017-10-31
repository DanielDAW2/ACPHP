
 <?php
 //Inicio las variables de sesion
       session_start();
       //Compruevo que han defenido el $_POST ESTO SIGNIFICA QUE HAN PULSADO EL BOTON
       if (isset($_POST) &&
            !empty($_SESSION['ataque']) &&
            !empty($_POST['defensa'])){
          $_SESSION['defensa'] = rand(1,6);
          header("Location:./resultats.php");
       }
  ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>defensa</title>
   </head>
   <body>
     <h1>Juego dados</h1>
     <h2>Defensa</h2>
     <?php echo $_SESSION['defensa'] ?>
     <form class="" action="<?php $_SERVER['PHP_SELF']?>" method="post">
       <input type="submit" name="defensa" value="defenderse">
     </form>
     <a href="./salir.php">Salir</a>
   </body>
 </html>
