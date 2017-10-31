<?php
  $cognoms= array();
  $cognomsp[0] = "Alvarez";
  $cognomsp[1] = "Ferreira";
  $cognomsp[2] = "Raya";
  $cognomsp[3] = "Tabares";
  $cognomsp[4] = "Perez";
  $cognomsp[5] = "Onetti";
  $cognomsp[6] = "Gonzales";
  $cognomsp[7] = "Navarro";

  $cognomss[0] = "Muñoz";
  $cognomss[1] = "Cano";
  $cognomss[2] = "Iglesias";
  $cognomss[3] = "Montoro";
  $cognomss[4] = "Lodetti";
  $cognomss[5] = "Tena";
  $cognomss[6] = "Sevillano";
  $cognomss[7] = "Fuster";

  $orden = array_merge($cognomsp,$cognomss);

  echo "<h1> Array desordenado</h1><p>";
  foreach ($orden as $key => $value) {
    echo $value." | ";
  }
  echo " </p>";

  sort($orden);
  echo "<h1> Array ordenado</h1><p>";
  foreach ($orden as $key => $value) {
    echo $value." | ";
  }
  echo " </p>";
 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Activitat 2</title>
   </head>
   <body>

   </body>
 </html>
