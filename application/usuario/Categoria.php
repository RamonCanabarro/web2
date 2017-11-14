<?php

include_once '../conexao.php';

class Categoria{
	
	protected $id_Categoria;
	protected $nome;
	
	
	public function recuperarTodos(){
		
		$sql = "select * from categoria";
		
		$oConexao = new Conexao();
		return $oConexao->recuperarTodos($sql);
	}

	public function carregarPorId($id_categoria){
	
		$sql = "select * from marca where id_categoria = $id_categoria";
		
		$oConexao = new Conexao();
		$tipo = $oConexao->recuperarTodos($sql);
		
		$this->id_categoria = $tipo[0]['id_categoria'];
		$this->nome = $tipo[0]['nome'];
	}
	public function recuperarPorCategoria($id_categoria){
	    $sql = "select id_categoria from tipo_categoria where id_tipo = $id_categoria";
	    $oConexao = new Conexao();
	    $categoria = $oConexao->recuperarTodos($sql);
	    $this->id_Categoria = $categoria[0]['id_categoria'];
	    $this->nome = $categoria[0]['nome'];


    }
}