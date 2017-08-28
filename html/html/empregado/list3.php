<?php

include_once '../../conexao.php';

class Cadastrar3
{

    protected $id_empregado;
    protected $nome;
    protected $cpf;
    protected $telefone;
    protected $celular;
    protected $email;
    protected $cargo_id_cargo;
    protected $fk_administrador;
    protected $endereco;

    public function getIdEmpregado()
    {
        return $this->id_empregado;
    }

    public function setIdEmpregado($id_empregado)
    {
        $this->id_empregado = $id_empregado;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
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

    public function getCargo()
    {
        return $this->cargo_id_cargo;
    }

    public function setCargo($cargo_id_cargo)
    {
        $this->cargo_id_cargo = $cargo_id_cargo;
    }

    public function getFkAdministrador()
    {
        return $this->fk_administrador;
    }

    public function setFkAdministrador($fk_administrador)
    {
        $this->fk_administrador = $fk_administrador;
    }

//    public function getEndereco()
//    {
//        return $this->endereco;
//    }
//
//    public function setEndereco($endereco)
//    {
//        $this->endereco = $endereco;
//    }


    /**
     * @param $dados
     * @return mixed
     */
    public function inserir($dados)
    {
        $id_empregado = $dados ['id_empregado'];
        $nome = $dados['nome'];
        $cpf = $dados['cpf'];
        $telefone = $dados['telefone'];
        $celular = $dados['celular'];
        $cargo_id_cargo = $dados['cargo_id_cargo'];
        $fk_administrador = $dados['fk_administrador'];
        $sql = /** @lang text */
            "insert into empregado (id_empregado, nome, cpf, telefone, celular,cargo_id_cargo, fk_administrador)values ('$id_empregado', '$nome', '$cpf', '$telefone', '$celular', '$cargo_id_cargo','$fk_administrador');";

        $oConexao = new conexao();
        return $oConexao->executar($sql);

    }


    public function carregarPorId($id_empregado)
    {

        $sql = "select * from empregado where $id_empregado = $id_empregado";

        $oConexao = new conexao();
        $id_empregado = $oConexao->recuperarTodos($id_empregado);

    }

    public function recuperarTodos()
    {

        $sql = "select * from empregado";

        $oConexao = new conexao();
        return $oConexao->recuperarTodos($sql);
    }

    public function excluir($cpf)
    {

        $sql = "delete from empregado where $cpf= $cpf";

        $oConexao = new conexao();
        return $oConexao->executar($sql);
    }

}
