<?php

include_once '../../conexao.php';

class Cadastrar6
{

    protected $id_cardapio;
    protected $pratos;

    public function getIdCardapio()
    {
        return $this->id_cardapio;
    }

    public function setIdCardapio($id_cardapio)
    {
        $this->id_cardapio = $id_cardapio;
    }

    public function getPratos()
    {
        return $this->pratos;
    }

    public function setPratos($pratos)
    {
        $this->pratos = $pratos;
    }

    public function getPreco()
    {
        return $this->preco;
    }

    public function setPreco($preco)
    {
        $this->preco = $preco;
    }


    /**
     * @param $dados
     * @return mixed
     */
    public function inserir($dados)
    {
//        $id_cardapio = $dados ['id_cardapio'];
        $pratos = $dados['pratos'];
        $preco = $dados['preco'];
        $sql = /** @lang text */
            "insert into cardapio (pratos, preco)values ('$pratos',$preco);";

        $oConexao = new conexao();
        return $oConexao->executar($sql);

    }


    public function carregarPorId($id_cardapio)
    {
        $sql =  /** @lang text */
            "select * from cardapio where id_cardapio = $id_cardapio;";

        $oConexao = new Conexao();
        $cardapio = $oConexao->recuperarTodos($sql);

//        $this->id_cardapio = $cardapio[0]['id_cardapio'];
        $this->pratos = $cardapio[0]['pratos'];
        $this->preco = $cardapio[0]['preco'];
       }

    public function recuperarTodos()
    {

        $sql = "select * from cardapio";

        $oConexao = new conexao();
        return $oConexao->recuperarTodos($sql);
    }
    public function alterar($dados){

        $id_cardapio = $dados['id_cardapio'];
        $cardapio = $dados['cardapio'];
        $sql = /** @lang text */
            "update cardapio set
					cardapio = '$cardapio'
									where id_cardapio = $id_cardapio";

        $oConexao = new Conexao();
        return $oConexao->executar($sql);
    }
    public function excluir($id_cardapio)
    {

        $sql = "delete from cardapio where id_cardapio= $id_cardapio";

        $oConexao = new conexao();
        return $oConexao->executar($sql);
    }

}
