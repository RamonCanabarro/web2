<?php

/**
 * Created by PhpStorm.
 * User: 16114290002
 * Date: 19/09/2017
 * Time: 20:06
 */
class Municipio
{
    public function recuperarTodos()
    {
        $conexao = new Conexao();

        $sql = "select * from municipio";
        return $conexao->recuperarTodos($sql);
    }
}