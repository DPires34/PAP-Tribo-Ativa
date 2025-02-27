<?php

require_once('Files/funcao.php');

$email = trim($_POST['email']);
$password = trim($_POST['password']);


if (login_user($email, $password)) {
    alert('success', 'Conta logada com sucesso.');
    header('Location: conta-compras.php');
    die();
} else {
    alert('danger', 'Você inseriu o nome de utilizador ou password errado.');
    header('Location: login.php');
    
}





