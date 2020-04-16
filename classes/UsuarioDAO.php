<?php
require 'Model.php';
class UsuarioDAO extends Model
{   
    public function __construct() {
    	parent::__construct();
    	$this->tabela = 'usuarios';
    	$this->class = 'Usuario';
    }

    public function insereUsuario(Usuario $usuario) {
    	$values = "null, '{$usuario->getNome()}'";
        $values = "null, '{$usuario->getEmail()}'";
        $values = "null, '{$usuario->getSenha()}'";
    	return $this->inserir($values);
    }

    public function alteraUsuario(Usuario $usuario) {
    	$values = "nome = '{$usuario->getNome()}'";
        $values = "email = '{$usuario->getEmail()}'";
        $values = "senha = '{$usuario->getSenha()}'";
    	$this->alterar($usuario->getId(), $values);
    }
}