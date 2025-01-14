<?php

require_once('Files/funcao.php');

$email = trim($_POST['email']);
$password = trim($_POST['password']);
$password_1 = trim($_POST['password_1']);
$numero_telemovel = trim($_POST['numero_telemovel']);


$sql = "SELECT * FROM utilizadores WHERE email = '{$email}'";
$res = $conn->query($sql);

if($res->num_rows > 0){
    die("Utilizador com o mesmo email já existente.");
}

echo "<pre>";
print_r($_POST);
