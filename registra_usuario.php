<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once ('db.class.php');

$usuario = $_POST['usuario'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$conec = new db();
$link = $conec->conecta_mysql();

$sql = "INSERT INTO usuarios (usuario, email, senha) VALUES ('$usuario','$email','$senha')";

//executar a query
if(mysqli_query($link, $sql)){
    echo "Usuário registrado com sucesso!";
}else{
    echo "Erro ao registrar o usuário!";
}

