<?php

require_once('Files/funcao.php');

$email = trim($_POST['email']);
$sql = "SELECT * FROM utilizadores WHERE email = '{$email}'";
die($sql);
echo "<pre>";
print_r($_POST);