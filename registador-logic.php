<?php

require_once('Files/funcao.php');

$email = trim($_POST['email']);
$password = trim(   $_POST['password']);
$password_1 = trim(string: $_POST['password_1']);
$phone_number = trim($_POST['phone_number']);
$last_name = trim($_POST['last_name']);
$first_name = trim($_POST['first_name']);


if($password != $password_1) {
    alert('danger', 'Passwords não condizem.');
    header('Location: login.php');
    die();
}


$sql = "SELECT * FROM users WHERE email = '{$email}'";
$res = $conn->query($sql);

if($res->num_rows > 0){
    alert('danger', 'Utilizador com o mesmo email já existente.');
    header('Location: login.php');
    die();
}

$password = password_hash($password, PASSWORD_DEFAULT);
$created = time();

$sql = "INSERT INTO users (
            first_name,
            last_name,
            phone_number,
            password,
            email,
            user_type,
            created
) VALUES (
    '{$first_name}',
    '{$last_name}',
    '{$phone_number}',
    '{$password}', 
    '{$email}',
    'customer',
    {$created}  
)";


if ($conn->query($sql)) {  
    login_user($email, $password);
    alert('success', 'Conta criada com sucesso.');
    header('Location: conta-compras.php');
    die();
} else {
    alert('danger', 'Falha na criação da conta.');
    header('Location: login.php');
    die();
}
