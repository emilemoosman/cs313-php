<?php

  //phpinfo();

?>

<!doctype html>
<head>
<title>Emile Moosman CS313 Home Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="index.css">



</head>
<body>
  <div class="jumbotron">
    <h1>Emile Moosman Home Page</h1> 
  </div>

  <nav class="navbar navbar-inverse navbar-fixed-top navbar-custom">

  </nav>

  <div class="container">
    <div class="row">

      <div class="col-sm-4">
        <h2>Beautiful Sydney:</h2>
        <div class="sydney"></div>
        <p>Picturesque Darling Harbour.</p>        
      </div>

      <div class="col-sm-8">
        <h2>About Me:</h2>
        <p>I'm from beautiful Sydney Australia, and will soon be adding my projects.</p>
        <br>
      </div>

      <div class="col-sm-12">

      </div>

    </div>
  </div>

  <div class="jumbotron">
    <footer>
      <?php
        date_default_timezone_set("Australia/Sydney");
        echo "Today is " . date("l") . ". ";
        echo "The date is " . date("m-d-Y") . ". ";
        echo "The time is " . date("h:i:sa") . ". ";
      ?>
    </footer>
  </div>

</body>

</html>