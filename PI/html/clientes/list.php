<?php

include_once '../../conexao.php';

class Cadastrar2
{

    protected $nome;
    protected $id_cliente;
    protected $cpf;
    protected $telefone;
    protected $celular;
    protected $empregado;
    protected $cep;

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
    public function getCep()
    {
        return $this->cep;
    }

    public function setCep($cep)
    {
        $this->cep = $cep;
    }


    /**
     * @param $dados
     * @return mixed
     */
    public function inserir($dados)
    {
        $nome = $dados ['nome'];
        $cpf = $dados['cpf'];
//        $id_cliente = $dados['id_cliente'];
        $telefone = $dados['telefone'];
        $celular = $dados['celular'];
        $empregado = $dados['fk_empregado'];
        $cep = $dados['cep'];
        $sql = /** @lang text */
            "insert into cliente (nome, cpf,  ep, telefone, celular, fk_empregado) values ('$nome', '$cpf','$cep','$telefone', '$celular','$empregado')";

        $oConexao = new conexao();
        return $oConexao->executar($sql);

    }
    public function recuperarTodos()
    {

        $sql = "select * from cliente";

        $oConexao = new conexao();
        return $oConexao->recuperarTodos($sql);
    }
    public function alterar($dados){

        $id_cliente = $dados['id_cliente'];
        $cpf = $dados['cpf'];
        $nome = $dados['nome'];
        $telefone = $dados['telefone'];
        $cep = $dados['cep'];
        $celular = $dados['celular'];
        $empregado = $dados['empregado'];

        $sql = /** @lang text */
            "update cliente set
					nome = '$nome', cpf='$cpf', cep='$cep', telefone='$telefone',celular ='$celular'
				where id_cliente = $id_cliente";

        $oConexao = new Conexao();
        return $oConexao->executar($sql);
    }
    public function excluir($id_cliente){

        $sql = /** @lang text */
            "delete from cliente where id_cliente = $id_cliente";

        $oConexao = new Conexao();
        return $oConexao->executar($sql);
    }
    public function carregarPorId($id_cliente){

        $sql =  /** @lang text */
            "select * from cliente where id_cliente = $id_cliente";

        $oConexao = new Conexao();
        $cliente = $oConexao->recuperarTodos($sql);

        $this->id_cliente = $cliente[0]['id_cliente'];
        $this->nome = $cliente[0]['nome'];
        $this->cpf = $cliente[0]['cpf'];
        $this->cep = $cliente[0]['cep'];
        $this->telefone = $cliente[0]['telefone'];
        $this->celular = $cliente[0]['celular'];
        $this->fk_empregado = $cliente[0]['fk_empregado'];
    }

}