<?php
session_Start();

$email = $_SESSION['userEmail'];
$id = $_SESSION['userId'] ;

?>

<html>
<head>
    <title>HOME PAGE</title>
</head>
<body>
    <p>
        Bem Vindo <?php echo $email; ?>
    </p>
    <p>
        <a href="logooff.php">Logooff</a>
    </p>
</body>
</html>