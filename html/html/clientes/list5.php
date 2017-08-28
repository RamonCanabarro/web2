<?php

include_once '../../conexao.php';

class Cadastrar5
{

    protected $nome;
    protected $id_cliente;
    protected $cpf;
    protected $telefone;
    protected $celular;
    protected $empregado;
    protected $endereco;

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getIdCliente()
    {
        return $this->id_cliente;
    }

    public function setIdCliente($id_cliente)
    {
        $this->id_cliente = $id_cliente;
    }

    public function getCpf()
    {
        return $this->cpf;
    }

    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }
    public function getTelefone()
    {
        return $this->telefone;
    }

    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }
    public function getCelular()
    {
        return $this->celular;
    }

    public function setCelular($celular)
    {
        $this->celular = $celular;
    }
    public function getEmpregado()
    {
        return $this->empregado;
    }

    public function setEmpregado($empregado)
    {
        $this->empregado = $empregado;
    }
    public function getEndereco()
    {
        return $this->endereco;
    }

    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
    }


    /**
     * @param $dados
     * @return mixed
     */
    public function inserir($dados)
    {
        $nome = $dados ['nome'];
        $cpf = $dados['cpf'];
        $id_cliente = $dados['id_cliente'];
        $telefone = $dados['telefone'];
        $celular = $dados['celular'];
        $empregado = $dados['empregado'];
        $endereco = $dados['endereco'];
        $sql = /** @lang text */
            "insert into cliente (id_cliente, nome, cpf, endereco, telefone, celular, fk_empregado) values ('$id_cliente', '$nome', '$cpf','$endereco','$telefone', '$celular','$empregado')";

        $oConexao = new conexao();
        return $oConexao->executar($sql);

    }


    public function carregarPorId($produtos)
    {

        $sql = "select * from produtos where produtos = $produtos";

        $oConexao = new conexao();
        $reservas = $oConexao->recuperarTodos($produtos);

    }

    public function recuperarTodos()
    {

        $sql = "select * from produtos";

        $oConexao = new conexao();
        return $oConexao->recuperarTodos($sql);
    }
    public function alterar($dados){

        $nome = $dados ['nome'];
        $cpf = $dados['id_cliente'];
        $telefone = $dados['cpf'];
        $sql = /** @lang text */
            "update curso set
					nome = '$nome'
				where id_curso = $cpf";

        $oConexao = new conexao();
        return $oConexao->executar($sql);
    }


    public function excluir($nome)
    {

        $sql = "delete from produtos where nome = $nome";

        $oConexao = new conexao();
        return $oConexao->executar($sql);
    }

}