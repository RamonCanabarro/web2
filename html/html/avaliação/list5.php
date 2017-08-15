<?php

include_once '../../conexao.php';

class Cadastrar5
{

    protected $nome;
    protected $preco;
    protected $quantidade;

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getPreco()
    {
        return $this->preco;
    }

    public function setPreco($preco)
    {
        $this->preco = $preco;
    }

    public function getQuantidade()
    {
        return $this->quantidade;
    }

    public function setQuantidade($quantidade)
    {
        $this->quantidade = $quantidade;
    }
    /**
     * @param $dados
     * @return mixed
     */
    public function inserir($dados)
    {
        $nome = $dados ['nome'];
        $preco = $dados['preco'];
        $quantidade = $dados['quantidade'];
        $sql = /** @lang text */
            "insert into produtos (nome, preco, quantidade) values ('$nome', '$preco', '$quantidade')";

        $oConexao = new Conexao();
        return $oConexao->executar($sql);

    }


    public function carregarPorId($produtos)
    {

        $sql = "select * from produtos where produtos = $produtos";

        $oConexao = new Conexao();
        $reservas = $oConexao->recuperarTodos($produtos);

    }

    public function recuperarTodos()
    {

        $sql = "select * from produtos";

        $oConexao = new Conexao();
        return $oConexao->recuperarTodos($sql);
    }
    public function alterar($dados){

        $nome = $dados ['nome'];
        $preco = $dados['preco'];
        $quantidade = $dados['quantidade'];
        $sql = /** @lang text */
            "update curso set
					nome = '$nome'
				where id_curso = $preco";

        $oConexao = new Conexao();
        return $oConexao->executar($sql);
    }


    public function excluir($nome)
    {

        $sql = "delete from produtos where nome = $nome";

        $oConexao = new Conexao();
        return $oConexao->executar($sql);
    }

}