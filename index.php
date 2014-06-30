<?php
  $is = isset($_GET['is']) ? $_GET['is'] : 'is an asshole!';
?>
<html>
  <head>
    <title>...::: Charley  :::...</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="css/main.css" />
  </head>

  <body>
    <h1>Charley is <?php echo $is; ?></h1>
    <footer>
      Powered by <a href="https://twitter.com/caedes">@caedes</a>
      - <a href="https://github.com/caedes/charley">Source</a>
    </footer>
  </body>
</html>
