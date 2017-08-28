<?php

include_once '../conexao.php';

class Modelo
{

    protected $id_modelo;
    protected $nome;

    public function getIdMarca()
    {
        return $this->id_modelo;
    }

    public function setIdMarca($id_modelo)
    {
        $this->id_modelo = $id_modelo;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function inserir($dados)
    {

        $nome = $dados['nome'];

        $sql = "insert into modelo (nome) 
						   values ('$nome')";

        $oConexao = new Conexao();
        return $oConexao->executar($sql);
    }

    public function alterar($dados)
    {

        $id_modelo = $dados['id_modelo'];
        $nome = $dados['nome'];

        $sql = "update modelo set
					nome = '$nome'
				where id_modelo = $id_modelo";

        $oConexao = new Conexao();
        return $oConexao->executar($sql);
    }

    public function excluir($id_modelo)
    {

        $sql = "delete from modelo where id_modelo = $id_modelo";

        $oConexao = new Conexao();
        return $oConexao->executar($sql);
    }

    public function recuperarTodos()
    {

        $sql = "select * from modelo";

        $oConexao = new Conexao();
        return $oConexao->recuperarTodos($sql);
    }

    public function carregarPorId($id_modelo)
    {

        $sql = "select * from modelo where id_modelo = $id_modelo";

        $oConexao = new Conexao();
        $modelos = $oConexao->recuperarTodos($sql);

        $this->id_modelo = $modelos[0]['id_modelo'];
        $this->nome = $modelos[0]['nome'];
    }

    public function RecuperarPorMarca($id_marca)
    {

        $sql = "select * from modelo where id_marca = '$id_marca'";

        $oConexao = new Conexao();
        $modelos = $oConexao->recuperarTodos($sql);
        foreach ($modelos as $modelo) {
            echo " <option value='{$modelo['id_marca']}'>{$modelo['nome']}</option>";

        }
    }
}