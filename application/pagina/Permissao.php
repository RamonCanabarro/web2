<?php

/**
 * Created by PhpStorm.
 * User: Antonio RS-PC
 * Date: 24/10/2017
 * Time: 17:30
 */
class Permissao
{
    protected $id_pagina;
    protected $id_perfil;

    public function getPagina(){
        $this->pagina;
    }
    public function setPagina($pagina){
        $this->pagina = $pagina;
    }
    public function getPerfil(){
        $this->pefil;
    }
    public function setPerfil($pefil){
        $this->perfil = $pefil;
    }
    public function inserir($dados){

        $id_pagina = $dados['id_pagina'];
        $id_perfil = $dados['id_perfil'];

        $sql = "insert into pagina (id_pagina, id_perfil) 
						   values ('$id_pagina', '$id_perfil')";

        $oConexao = new Conexao();
        return $oConexao->executar($sql);
    }

    public function recuperarTodos()
    {
        $conexao = new Conexao();

        $sql = "select * from permissao";
        return $conexao->recuperarTodos($sql);
    }


}