<?php

include_once '../../conexao.php';

class Cadastrar5
{

    protected $id_mesa;
    protected $mesa;

    public function getIdMesa()
    {
        return $this->id_mesa;
    }

    public function setIdMesa($id_mesa)
    {
        $this->id_mesa = $id_mesa;
    }

    public function getMesa()
    {
        return $this->mesa;
    }

    public function setMesa($mesa)
    {
        $this->mesa = $mesa;
    }



    /**
     * @param $dados
     * @return mixed
     */
    public function inserir($dados)
    {
//        $id_mesa = $dados ['id_mesa'];
        $mesa = $dados['mesa'];
        $sql = /** @lang text */
            "insert into mesa (mesa)values ('$mesa');";

        $oConexao = new conexao();
        return $oConexao->executar($sql);

    }


    public function carregarPorId($id_mesa)
    {
        $sql =  /** @lang text */
            "select * from mesa where $id_mesa = $id_mesa;";

        $oConexao = new Conexao();
        $mesa = $oConexao->recuperarTodos($sql);

//        $this->id_mesa = $mesa[0]['id_mesa'];
        $this->mesa = $mesa[0]['mesa'];
       }

    public function recuperarTodos()
    {

        $sql = "select * from mesa";

        $oConexao = new conexao();
        return $oConexao->recuperarTodos($sql);
    }
    public function alterar($dados){

        $id_mesa = $dados['id_mesa'];
        $mesa = $dados['mesa'];
        $sql = /** @lang text */
            "update mesa set
					mesa = '$mesa'
									where id_mesa = $id_mesa";

        $oConexao = new Conexao();
        return $oConexao->executar($sql);
    }
    public function excluir($id_mesa)
    {

        $sql = "delete from mesa where id_mesa= $id_mesa";

        $oConexao = new conexao();
        return $oConexao->executar($sql);
    }

}
