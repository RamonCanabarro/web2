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
            "insert into administrador (id_administrador,nome, telefone,email, senha)values ('$id_administrador','$nome','$telefone', '$email', '$senha')";

        $oConexao = new conexao();
        return $oConexao->executar($sql);
    }

    public function recuperarTodos()
    {
        $sql = "select * from administrador";

        $oConexao = new Conexao();
        return $oConexao->recuperarTodos($sql);
    }
}