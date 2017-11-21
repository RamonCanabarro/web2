<?php

include_once '../../conexao.php';

class Cadastrar
{

    protected $id_administrador;
    protected $adm;
    protected $telefone;
    protected $email;
    protected $senha;


    public function getIdAdministrador()
    {
        return $this->id_administrador;
    }

    public function setIdAdministrador($id_administrador)
    {
        $this->id_administrador = $id_administrador;
    }

    public function getAdm()
    {
        return $this->adm;
    }

    public function setAdm($adm)
    {
        $this->adm = $adm;
    }

    public function getSenha()
    {
        return $this->senha;
    }

    public function setSenha($senha)
    {
        $this->senha = $senha;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getTelefone()
    {
        return $this->telefone;
    }

    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }

    /**
     * @param $dados
     * @return mixed
     */
    public function inserir($dados)
    {
        $id_administrador = $dados['id_administrador'];
        $senha = $dados['senha'];
        $adm = $dados['adm'];
        $telefone = $dados['telefone'];
        $email = $dados['email'];
        $sql = /** @lang text */
            "insert into administrador (adm, telefone,email, senha, perfil_id_perfil)values ( '$adm','$telefone', '$email', '$senha', '3')";

        $oConexao = new Conexao();
        return $oConexao->executar($sql);
    }

    public function recuperarTodos()
    {
        $sql = "select * from administrador";

        $oConexao = new Conexao();
        return $oConexao->recuperarTodos($sql);
    }

    public function alterar($dados)
    {

        $id_administrador = $dados['id_administrador'];
        $senha = $dados['senha'];
        $adm = $dados['adm'];
        $telefone = $dados['telefone'];
        $email = $dados['email'];

        $sql = /** @lang text */
            "update administrador set
					adm = '$adm', telefone='$telefone', email='$email', senha ='$senha'
				where id_administrador = $id_administrador";

        $oConexao = new Conexao();
        return $oConexao->executar($sql);
    }

    public function excluir($id_administrador)
    {

        $sql = /** @lang text */
            "delete from administrador where id_administrador = $id_administrador";

        $oConexao = new Conexao();
        return $oConexao->executar($sql);
    }

    public function carregarPorId($id_administrador)
    {

        $sql = /** @lang text */
            "select * from administrador where id_administrador = $id_administrador";

        $oConexao = new Conexao();
        $administrador = $oConexao->recuperarTodos($sql);

        $this->id_administrador = $administrador[0]['id_administrador'];
        $this->adm = $administrador[0]['adm'];
        $this->senha = $administrador[0]['senha'];
        $this->telefone = $administrador[0]['telefone'];
        $this->email = $administrador[0]['email'];
    }

    public function logar($email, $senha)
    {
        $sql = "select id_administrador, adm, perfil_id_perfil,email,senha
                from administrador 
                where email = '$email'
                and senha = '$senha'";

        $conexao = new Conexao();
        $dados = $conexao->recuperarTodos($sql);


        if (count($dados)) {
            $_SESSION['administrador'] = $dados[0];
            return true;
        } else {
            return false;
        }
    }

    public function VerificarAcesso()
    {
        $raiz = '/web2/PI/html/';
        $pagina = str_replace($raiz, '', $_SERVER['SCRIPT_NAME']);

        $sql = "select *
                from pagina pa
                	left join permissao pe on pe.id_pagina = pa.id_pagina
                where pa.nome = '$pagina'";

        $conexao = new Conexao();
        $dados = $conexao->recuperarTodos($sql);
//        echo '<pre>';
//        print_r($pagina);
//        print_r($_SESSION);
//        print_r($dados);
//        die;

        foreach ($dados as $dado) {

            // Se a página for pública, o usuário tem acesso à página
            if ($dado['publica']) {
                return true;
            }

            //Se o usuário estiver logado e o perfil dele tiver acesso à página
            if (isset($_SESSION['adm']) && $_SESSION['adm']['id_perfil'] == $dado['id_perfil']) {
                return true;
            }
        }
        return false;

    }

}