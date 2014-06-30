<html>
  <head>
    <title>...::: Charley  :::...</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <style>
    body {
      background-image: url(images/burp.jpg);
    }
    body, a {
      color: white;
      font-family: "Comic Sans MS", "Comic Sans", cursive;
    }
    a {
      text-decoration: none;
    }
    h1 {
      font-weight: none;
      font-size: 80px;
      text-align: center;
      margin-top: 300px;
    }
    footer {
      text-align: center;
      position: absolute;
      bottom: 30px;
      left: 50%;
      margin-left: -90px;
    }
    </style>
  </head>

  <body>
    <h1>Charley is <?php echo $_GET['is']; ?></h1>
    <footer>
      Powered by <a href="https://twitter.com/caedes">@caedes</a>
      - <a href="https://github.com/caedes/charley">Source</a>
    </footer>
  </body>
</html>
