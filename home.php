<?php
session_Start();

$email = $_SESSION['userEmail'];
$id = $_SESSION['userId'] ;

?>

<html>
<head>
    <title>HOME PAGE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="home.php">Home</a></li>
      <li><a href="contato.php">Contato</a></li>
      
      
    </ul>
  </div>
</nav>
  
    <h3>
        Bem Vindo <?php echo $email; ?>
</h3>

    <p>
        <a href="logoff.php">Logooff</a>
    </p>
</body>
</html>