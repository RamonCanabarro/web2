<?php
session_start();

include_once 'list.php';
$adm = new Cadastrar();
$sucesso = $adm->verificarAcesso();

if(!$sucesso){
    $_SESSION['mensagem'] = "Você não possui permissão para acessar essa página";
    header('location: ../administrador/login.php');
}
?>