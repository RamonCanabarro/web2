<?php
include_once '../conexao.php';

class Pagina
{
    protected $id_pagina;
    protected $nome;
    protected $publica;

    public function getIdPagina(){
        $this->id_pagina;
    }
    public function setIdPagina($id_pagina){
    $this->id_pagina  = $id_pagina;
    }
    public function  getNome(){
        $this->nome;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }
    public function getPublica(){
        $this->publica;
    }
    public function setPublica($publica){
        $this->publica = $publica;
    }

    public function inserir($dados){

        $nome = $dados['nome'];
        $publica = $dados['publica'];

        $sql = "insert into pagina (nome, publica) 
						   values ('$nome', '$publica')";

        $oConexao = new Conexao();
        return $oConexao->executar($sql);
    }


    public function recuperarTodos()
    {
        $conexao = new Conexao();

        $sql = "select * from pagina";
        return $conexao->recuperarTodos($sql);
    }

}