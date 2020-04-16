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
    	return $this->inserir($values);
    }

    public function alteraUsuario(Usuario $usuario) {
    	$values = "nome = '{$usuario->getNome()}'";
    	$this->alterar($categoria->getId(), $values);
    }
}