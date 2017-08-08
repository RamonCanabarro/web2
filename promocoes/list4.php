<?php

include_once '../../conexao.php';

class Cadastrar4{

    protected $horario;
    protected $oferta;

     public function getHorario(){
        return $this->horario;
    }
    public function setHorario($horario){
        $this->horario = $horario;
    }
        
    public function getOferta(){
        return $this->oferta;
    }
    public function setOferta($oferta){
        $this->oferta = $oferta;
    }



    /**
     * @param $dados
     * @return mixed
     */
    public function inserir($dados){
        $horario= $dados['horario'];
        $oferta = $dados['oferta'];

        $sql = /** @lang text */
            "insert into promocoes (horario, oferta)values ('$horario', '$oferta')";

        $oConexao = new Conexao();
		return $oConexao->executar($sql);
	}

		public function carregarPorId($promocoes){
	
		$sql = "select * from promocoes where $promocoes = $promocoes";
        
		$oConexao = new Conexao();
		$promocoes = $oConexao->recuperarTodos($promocoes);

                }


    public function recuperarTodos(){

        $sql = "select * from promocoes";

        $oConexao = new Conexao();
        return $oConexao->recuperarTodos($sql);
    }
    public function excluir($horario){

    $sql = "delete from promocoes where $horario = $horario";

        $oConexao = new Conexao();
        return $oConexao->executar($sql);
    }


}


