<?php

class Perfil
{
    public function recuperarTodos()
    {
        $conexao = new Conexao();

        $sql = "select * from perfil";
        return $conexao->recuperarTodos($sql);
    }
}