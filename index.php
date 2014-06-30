<?php
  $verb = isset($_GET['verb']) ? $_GET['verb'] : 'is';
  $msg  = isset($_GET['msg']) ? $_GET['msg'] : 'an asshole!';
?>
<html>
  <head>
    <title>...::: Charley  :::...</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="css/main.css" />
  </head>

  <body>
    <h1>Charley <?php echo $verb;?> <?php echo $msg;?></h1>
    <footer>
      Powered by <a href="https://twitter.com/caedes" target="_blank">@caedes</a>
      - <a href="https://github.com/caedes/charley#charley" target="_blank">Readme</a>
    </footer>
  </body>
</html>
