<?php

include_once '../../conexao.php';

class Cadastrar{

    protected $usuario;
    protected $senha;
	protected $nome;
    protected $cpf;
    protected $rg;
    protected $telefone;
    protected $celular;
    protected $nascimento;
    protected $email;
    protected $sexo;


    public function getIdUsuario(){
		return $this->usuario;
	}
	
	public function setIdUsuario($usuario){
		$this->usuario = $usuario;
	}

	public function getNome(){
		return $this->nome;
	}
	
	public function setNome($nome){
		$this->nome = $nome;
	}
    public function getCpf(){
        return $this->cpf;
    }

    public function setCpf($cpf){
        $this->cpf = $cpf;
    }
    public function getSenha(){
        return $this->senha;
    }

    public function setSenha($senha){
        $this->senha = $senha;
    }
        public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        $this->email = $email;
    }
            public function getNascimento(){
        return $this->nascimento;
    }

    public function setNascimento($nascimento){
        $this->nascimento = $nascimento;
    }
    public function getTelefone(){
        return $this->telefone;
    }
    public function setTelefone($telefone){
        $this->telefone = $telefone;
    }
    public function getCelular(){
        return $this->celular;
    }
    public function setCelular($celular){
        $this->celular = $celular;
    }
     public function getSexo(){
        return $this->sexo;
    }
    public function setSexo($sexo){
        $this->sexo = $sexo;
    }
        
    public function getRg(){
        return $this->rg;
    }
    public function setRg($rg){
        $this->rg = $rg;
    }



    /**
     * @param $dados
     * @return mixed
     */
    public function inserir($dados){
        $usuario= $dados['usuario'];
        $senha = $dados['senha'];
		$nome = $dados['nome'];
        $cpf = $dados['cpf'];
        $rg = $dados['rg'];
        $telefone = $dados['telefone'];
        $celular = $dados['celular'];
        $email = $dados['email'];
        $nascimento = $dados['nascimento'];
        $sexo = $dados['gender'];

        $sql = /** @lang text */
            "insert into Usuario (usuario, senha,nome, cpf, rg, telefone, celular, email, nascimento, sexo)values ('$usuario', '$senha', '$nome','$cpf', '$rg', '$telefone', '$celular', '$email', '$nascimento', '$sexo')";

        $oConexao = new Conexao();
		return $oConexao->executar($sql);
	}

		public function carregarPorId($usuario){
	
		$sql = "select * from Usuario where usuario = $usuario";
        
		$oConexao = new Conexao();
		$usuario = $oConexao->recuperarTodos($usuario);

                }
}