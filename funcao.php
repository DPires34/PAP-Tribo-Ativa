<?php

$conn = new mysqli('localhost', 'root', '1234', 'Tribo_Ativa');
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}