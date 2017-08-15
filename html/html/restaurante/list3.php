<?php

include_once '../../conexao.php';

class Cadastrar3
{

    protected $horario;
    protected $cliente;
    protected $cpf;
    protected $Qtd_Adult;
    protected $Qtd_Crian;

    public function getHorario()
    {
        return $this->horario;
    }

    public function setHorario($horario)
    {
        $this->horario = $horario;
    }

    public function getCliente()
    {
        return $this->cliente;
    }

    public function setCliente($cliente)
    {
        $this->cliente = $cliente;
    }

    public function getCpf()
    {
        return $this->cpf;
    }

    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }

    public function getQtd_Adult()
    {
        return $this->Qtd_Adult;
    }

    public function setQtd_Aduçt($Qtd_Adult)
    {
        $this->Qtd_Adult = $Qtd_Adult;
    }

    public function getQtd_Crian()
    {
        return $this->Qtd_Crian;
    }

    public function setQtd_Crian($Qtd_Crian)
    {
        $this->Qtd_Crian = $Qtd_Crian;
    }


    /**
     * @param $dados
     * @return mixed
     */
    public function inserir($dados)
    {
        $horario = $dados ['horario'];
        $cliente = $dados['cliente'];
        $cpf = $dados['cpf'];
        $Qtd_Adult = $dados['Qtd_Adult'];
        $Qtd_Crian = $dados['Qtd_Crian'];
        $sql = /** @lang text */
            "insert into reservas (horario, cliente, cpf, Qtd_Adult, Qtd_Crian)values ('$horario', '$cliente', '$cpf', '$Qtd_Adult', '$Qtd_Crian')";

        $oConexao = new Conexao();
        return $oConexao->executar($sql);

    }


    public function carregarPorId($reservas)
    {

        $sql = "select * from reservas where $reservas = $reservas";

        $oConexao = new Conexao();
        $reservas = $oConexao->recuperarTodos($reservas);

    }

    public function recuperarTodos()
    {

        $sql = "select * from reservas";

        $oConexao = new Conexao();
        return $oConexao->recuperarTodos($sql);
    }

    public function excluir($cpf)
    {

        $sql = "delete from reservas where $cpf= $cpf";

        $oConexao = new Conexao();
        return $oConexao->executar($sql);
    }

}
