<?php
session_start();
if (isset($_POST) &&
    !empty($_SESSION['num']))
    {
        $valores = array();
        $cajas = 0;
        $repes = array();
        for($i=0;$i<$_SESSION['num'];$i++)
        {
          array_push($valores,$_POST['caja_'.$i]);
          if($_POST['caja_'.$i]=='')
          {
            $cajas++;
          }
        }
        $cajas = $_SESSION['num'] - $cajas;
        sort($valores);
        echo '<h1>Se han rellenado '.$cajas.' cajas</h1>';
        echo '<h1>Se han introducido</h1>';

        foreach ($valores as $key => $value) {
          echo $value.' , ';
        }
       $valor = 1;
       for ($a=0;$a<count($valores);$a++)
       {
         if($valores[$a]!='')
         {
           if($valores[$a]==$valores[$a+1])
           {
             while($valores[$a]==$valores[$a+1])
             {
                $a++;
                $valor++;
             }
             array_push($repes,'<p>El numero '.$valores[$a].', '.$valor.' veces.<p>');
             $valor = 1;
           }
         }
       }
       if(count($repes)!=0)
       {
         echo '<h1>Se han repetido los siguientes numeros</h1>';
         foreach ($repes as $key => $value)
         {
           echo $value;
         }
        }
        else {
          echo '<h1>No se ha repetido ningun número</h1>';
        }

      };

 ?>
