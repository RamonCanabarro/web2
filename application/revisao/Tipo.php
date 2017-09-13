<?php

include_once '../conexao.php';

class Tipo{
	
	protected $id_marca;
	protected $nome;
	
	
	public function recuperarTodos(){
		
		$sql = "select * from tipo";
		
		$oConexao = new Conexao();
		return $oConexao->recuperarTodos($sql);
	}

	public function carregarPorId($id_marca){
	
		$sql = "select * from marca where id_tipo = $id_tipo";
		
		$oConexao = new Conexao();
		$tipo = $oConexao->recuperarTodos($sql);
		
		$this->id_tipo = $tipo[0]['id_tipo'];
		$this->nome = $tipo[0]['nome'];
	}
}