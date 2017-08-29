<?php

include_once '../../conexao.php';

class Cadastrar
{

    protected $id_administrador;
    protected $nome;
    protected $telefone;
    protected $email;
    protected $senha;


    public function getIdAdministrador()
    {
        return $this->id_administrador;
    }

    public function setIdAdministrador($id_administrador)
    {
        $this->id_administrador = $id_administrador;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getSenha()
    {
        return $this->senha;
    }

    public function setSenha($senha)
    {
        $this->senha = $senha;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getTelefone()
    {
        return $this->telefone;
    }

    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }

    /**
     * @param $dados
     * @return mixed
     */
    public function inserir($dados)
    {
        $id_administrador = $dados['id_administrador'];
        $senha = $dados['senha'];
        $nome = $dados['nome'];
        $telefone = $dados['telefone'];
        $email = $dados['email'];
        $sql = /** @lang text */
            "insert into administrador (nome, telefone,email, senha)values ( '$nome','$telefone', '$email', '$senha')";

        $oConexao = new conexao();
        return $oConexao->executar($sql);
    }

    public function recuperarTodos()
    {
        $sql = "select * from administrador";

        $oConexao = new Conexao();
        return $oConexao->recuperarTodos($sql);
    }
    public function alterar($dados){

        $id_administrador = $dados['id_administrador'];
        $senha = $dados['senha'];
        $nome = $dados['nome'];
        $telefone = $dados['telefone'];
        $email = $dados['email'];

        $sql = /** @lang text */
            "update administrador set
					nome = '$nome', telefone='$telefone', email='$email', senha ='$senha'
				where id_administrador = $id_administrador";

        $oConexao = new Conexao();
        return $oConexao->executar($sql);
    }
    public function excluir($id_administrador){

        $sql = /** @lang text */
            "delete from administrador where id_administrador = $id_administrador";

        $oConexao = new Conexao();
        return $oConexao->executar($sql);
    }
    public function carregarPorId($id_administrador){

        $sql =  /** @lang text */
        "select * from administrador where id_administrador = $id_administrador";

        $oConexao = new Conexao();
        $administrador = $oConexao->recuperarTodos($sql);

        $this->id_administrador = $administrador[0]['id_administrador'];
        $this->nome = $administrador[0]['nome'];
        $this->senha = $administrador[0]['senha'];
        $this->telefone = $administrador[0]['telefone'];
        $this->email = $administrador[0]['email'];
    }

}