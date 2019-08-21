<html>
<head>
<title> Login </title>
<link rel="stylesheet" href="estilo.css">
<body>
<h2>Login</h2>

<form method="post" action="autentica.php">
  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="senha" name="senha" required>
        
    <button type="submit">Login</button>
    </div>
</form>

<?php
    if(isset($_GET['err'])){

        if($_GET['err']==101){
            echo "Login Inválido";
        }else if($_GET['err']==102){
            echo "Necessário Efetuar o Login";
        
        }else if($_GET['err']==103){
            echo "E-mail inválido!";
        }

    }
?>

</body>

</html>