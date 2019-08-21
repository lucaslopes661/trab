<?php
if($_POST){
$str = $_POST['senha'];
//echo "HASH: ".md5($str);
echo "<br/>";
if(md5($str) === 'e10adc3949ba59abbe56e057f20f883e'){
        echo "Senha Correta";
    exit;
}else{
        echo "Senha Incorreta";
    }
}
?>

<html>
<body>
    <form method="post" action="md5.php">
        <label>Digite sua Senha</label>
        <input type="text" name="senha" id="senha" size="20">
    </form>
</body>
</html>