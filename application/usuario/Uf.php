<?php

class Uf
{
    public function recuperarTodos()
    {
        $conexao = new Conexao();

        $sql = "select * from uf";
        return $conexao->recuperarTodos($sql);
    }

}