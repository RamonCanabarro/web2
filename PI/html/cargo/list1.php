<?php

include_once '../../conexao.php';

class Cargo
{

    protected $id_cargo;
    protected $cargo;
    protected $salario;

    public function getIdCargo()
    {
        return $this->id_cargo;
    }

    public function setIdCargo($id_cargo)
    {
        $this->id_cargo = $id_cargo;
    }

    public function getCargo()
    {
        return $this->cargo;
    }

    public function setCargo($cargo)
    {
        $this->cargo = $cargo;
    }

    public function getSalario()
    {
        return $this->salario;
    }

    public function setSalario($salario)
    {
        $this->salario = $salario;
    }

    /**
     * @param $dados
     * @return mixed
     */
    public function inserir($dados)
    {
//        $id_cargo = $dados ['id_cargo'];
        $cargo = $dados['cargo'];
        $salario = $dados['salario'];
        $sql = /** @lang text */
            "insert into cargo (cargo, salario)values ('$cargo', '$salario');";

        $oConexao = new conexao();
        return $oConexao->executar($sql);

    }


    public function carregarPorId($id_cargo)
    {
        $sql =  /** @lang text */
            "select * from cargo where id_cargo = $id_cargo;";

        $oConexao = new Conexao();
        $cargo = $oConexao->recuperarTodos($sql);

//        $this->id_cliente = $cargo[0]['id_cliente'];
        $this->cargo = $cargo[0]['cargo'];
        $this->salario = $cargo[0]['salario'];
    }

    public function recuperarTodos()
    {

        $sql = "select * from cargo";

        $oConexao = new conexao();
        return $oConexao->recuperarTodos($sql);
    }
    public function alterar($dados){

        $id_cargo = $dados['id_cargo'];
        $salario = $dados['salario'];
        $cargo = $dados['cargo'];

        $sql = /** @lang text */
            "update cargo set
					cargo = '$cargo', salario='$salario'
									where id_cliente = $id_cargo";

        $oConexao = new Conexao();
        return $oConexao->executar($sql);
    }
    public function excluir($id_cargo)
    {

        $sql = "delete from cargo where id_cargo= $id_cargo";

        $oConexao = new conexao();
        return $oConexao->executar($sql);
    }

}
