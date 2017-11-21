<?php

session_start();

include_once 'list.php';

$adm = new Cadastrar();

$sucesso = $adm->logar($_POST['email'], $_POST['senha']);

if ($sucesso){
//    echo '<pre>';
//    print_r($_SESSION['adm']);
//    die;
    $_SESSION['mensagem'] = "Usuário logado com sucesso. Seja bem-vindo: " . $_SESSION['administrador']['adm'];
    header('location: ../administrador/index.php');
}else{
    $_SESSION['mensagem'] = "Usuário ou senha inválido";
    header('location: ../administrador/login.php');
}

