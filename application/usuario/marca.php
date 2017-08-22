<?php

include_once '../conexao.php';

class Usuario{
	
	protected $id_usuario;
	protected $nome;
	
	public function getIdUsuario(){
		return $this->id_usuario;
	}
	
	public function setIdUsuario($id_usuario){
		$this->id_usuario = $id_usuario;
	}

	public function getNome(){
		return $this->nome;
	}
	
	public function setNome($nome){
		$this->nome = $nome;
	}
	
	public function inserir($dados){
		
		$nome = $dados['nome'];
		
		$sql = "insert into usuario (nome) 
						   values ('$nome')";
		
		$oConexao = new Conexao();
		return $oConexao->executar($sql);
	}
	
	public function alterar($dados){
		
		$id_usuario = $dados['id_usuario'];
		$nome     = $dados['nome'];
	
		$sql = "update usuario set
					nome = '$nome'
				where id_usuario = $id_usuario";
		
		$oConexao = new Conexao();
		return $oConexao->executar($sql);
	}

	public function excluir($id_usuario){
	
		$sql = "delete from usuario where id_usuario = $id_usuario";

		$oConexao = new Conexao();
		return $oConexao->executar($sql);
	}
	
	public function recuperarTodos(){
		
		$sql = "select * from usuario";
		
		$oConexao = new Conexao();
		return $oConexao->recuperarTodos($sql);
	}

	public function carregarPorId($id_usuario){
	
		$sql = "select * from usuario where id_usuario = $id_usuario";
		
		$oConexao = new Conexao();
		$usuarios = $oConexao->recuperarTodos($sql);
		
		$this->id_usuario = $usuarios[0]['id_usuario'];
		$this->nome = $usuarios[0]['nome'];
	}

}
