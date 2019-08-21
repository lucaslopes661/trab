<?php
$password = "123456";
$hash = password_hash($password, PASSWORD_DEFAULT);

echo $hash;

if (password_verify("123456",$hash)){
    echo 'secess!';
}
else{
echo'invalid';
}
?>
