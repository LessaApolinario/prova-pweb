<?php
define('ROOT_PATH', dirname(__DIR__));
require_once ROOT_PATH . "../models/database/MySQLDatabase.php";
require_once ROOT_PATH . "../models/Usuario.php";
require_once ROOT_PATH . "../models/UsuarioDAO.php";

class UsuarioController
{
    private $usuario;
    private $usuarioDAO;
    private $banco;

    public function cadastrar()
    {
        $this->usuario = new Usuario();
        $this->usuario->setUsername($_REQUEST["username"]);
        $this->usuario->setSenha($_REQUEST["senha"]);

        try {
            $this->banco = new MySQLDatabase();
            $this->usuarioDAO = new UsuarioDAO($this->banco);

            if ($this->usuarioDAO->cadastrar($this->usuario)) {
                require_once "views/cadastrar.php";
            }
        } catch (PDOException $error) {
            echo $error->getMessage();
        }
    }

    public function listar()
    {
        try {
            $this->banco = new MySQLDatabase();
            $this->usuarioDAO = new UsuarioDAO($this->banco);

            $_REQUEST["usuarios"] = $this->usuarioDAO->listar();
            require_once "views/listar.php";
        } catch (PDOException $error) {
            echo $error->getMessage();
        }
    }
}
