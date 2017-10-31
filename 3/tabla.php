<?php
session_start();
  if(isset($_POST)  &&
      $_POST['cajas']>0 &&
      $_POST['cajas']<10)
      {
        echo '<form action="repe.php" method="post"><table>';
        $_SESSION['num'] = $_POST['cajas'];
        for ($i=0; $i < $_SESSION['num'] ; $i++)
        {
          echo "<tr><td><input type='text' name='caja_".$i."' placeholder='Introduce el numero'></td></tr>";
        }
        echo '</table><input autocomplete="off" type="submit" name="" value="Enviar"></form>';
      }
      else
      {
        header("Location:/ACPHP/3");
      }

 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Activitat 3 Tabla</title>
   </head>
   <body>



   </body>
 </html>
