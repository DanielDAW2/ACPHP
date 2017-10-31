<?php
if(isset($_POST)&&
    !empty($_POST['numero']))
    {
      $divisor = array();
      $a=1;
      for($i=1;$i != round($_POST['numero'] / 2 +1);$i++)
      {
        if($_POST['numero'] % $i == 0)
        {
          $divisor[$a] = $i;
          $a++;
        }
      }
      $divisor[$a] = $_POST['numero'];

      echo "Los divisores de ".$_POST['numero']." son: ";
      foreach ($divisor as $key => $value) {
        echo $value.", ";
      }
    }

 ?>

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Activitat 1</title>
   </head>
   <body>
     <form class="" action="<?php $_SERVER['PHP_SELF']?>" method="post">
       <p>Número: <input type="text" name="numero" value=""> </p>
     </form>
   </body>
 </html>
