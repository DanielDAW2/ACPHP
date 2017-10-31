<?php
  if(isset($_GET) &&
    !empty($_GET['pag']))
    {
      $pagina = $_GET['pag'];
      if ($ruta = opendir('./src'))
      {
        while (false !== ($pag = readdir($ruta)))
        {
          if(is_readable("./src/".$pagina.".php"))
          {
            header("Location:./src/".$pagina.".php");
          }
          else {
            header("Location:./src/404.php");
          }
          closedir($ruta);
        }
      }
    }
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Navegador CHROMO</title>
  </head>
  <body>
    <h1>Navegador</h1>
    <form class="" action="<?php $_SERVER['PHP_SELF']; ?>" method="get">
      <p><input type="text" name="pag" cols=40 value="">
      <input type="submit" name="" value="Navegar"></p>
    </form>
  </body>
</html>
