<?php

include_once '../conexao.php';

class Cadastro{
	
	protected $id_cadastro;
	protected $nome;
	
	public function getIdCadastro(){
		return $this->id_cadastro;
	}
	
	public function setIdCadastro($id_cadastro){
		$this->id_cadastro = $id_cadastro;
	}

	public function getNome(){
		return $this->nome;
	}
	
	public function setNome($nome){
		$this->nome = $nome;
	}
	
	public function inserir($dados){
		
		$nome = $dados['nome'];
		
		$sql = "insert into administrador (nome) 
						   values ('$nome')";
		
		$oConexao = new conexao();
		return $oConexao->executar($sql);
	}
	
	public function alterar($dados){
		
		$id_curso = $dados['id_curso'];
		$nome     = $dados['nome'];
	
		$sql = "update administrador set
					nome = '$nome'
				where id_cadastro = $id_cadastro";
		
		$oConexao = new conexao();
		return $oConexao->executar($sql);
	}

	public function excluir($id_cadastro){
	
		$sql = "delete from administrador where id_cadastro = $id_curso";

		$oConexao = new conexao();
		return $oConexao->executar($sql);
	}
	
	public function recuperarTodos(){
		
		$sql = "select * from administrador";
		
		$oConexao = new conexao();
		return $oConexao->recuperarTodos($sql);
	}

	public function carregarPorId($id_curso){
	
		$sql = "select * from administrador where id_cadastro = $id_cadastro";
		
		$oConexao = new conexao();
		$cursos = $oConexao->recuperarTodos($sql);
		
		$this->id_cadastro = $cadastro[0]['id_cadastro'];
		$this->nome = $cadastro[0]['nome'];
	}
}