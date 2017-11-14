<?php

class Perfil
{
    protected $id_pefil;
    protected $nome;

    public function getIdPerfil(){
        $this->id_perfil;
    }
    public function setIdPagina($id_perfil){
        $this->id_perfil  = $id_perfil;
    }
    public function  getNome(){
        $this->nome;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }

    public function recuperarTodos()
    {
        $conexao = new Conexao();

        $sql = "select * from perfil";
        return $conexao->recuperarTodos($sql);
    }
}