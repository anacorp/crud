<?php

class PojoUsuario {

    private $cod_usuario;
    private $nome;
    private $email;
    private $senha;
    private $ativo;
    private $perfil;

    public function getCod_usuario() {
        return $this->cod_usuario;
    }

    public function setCod_usuario($cod_usuario) {
        $this->cod_usuario = $cod_usuario;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = strtolower($email);
    }

    public function getSenha() {
        return $this->senha;
    }

    public function setSenha($senha) {
        $this->senha = strtolower($senha);
    }

    public function getAtivo() {
        return $this->ativo;
    }

    public function setAtivo($ativo) {
        $this->ativo = strtolower($ativo);
    }

    public function getPerfil() {
        return $this->perfil;
    }

    public function setPerfil($perfil) {
        $this->perfil = $perfil;
    }

}
/*


Vamos criar agora o nosso POJO, que nada mais é do que o “espelho” da sua tabela em objetos.
 Este POJO irá conter um a definição da nossa tabela USUARIO com os campos: cod_usuario, nome, email, senha, ativo e perfil (este campo é um objeto referenciando outro POJO).*/


?>