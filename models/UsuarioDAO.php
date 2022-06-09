<?php
require_once "database/IDatabase.php";
require_once "database/DAO.php";
class UsuarioDAO extends DAO
{
    private $banco;

    public function __construct(IDatabase $banco)
    {
        $this->banco = $banco;
        $this->banco->connect();
    }

    public function cadastrar($usuario)
    {
        $values = "username, senha";
        $data = ":username, :senha";
        $stmt = $this->banco->insert($values, $data);
        $stmt->bindValue(":username", $usuario->getUsername());
        $stmt->bindValue(":senha", $usuario->getSenha());
        return $stmt->execute();
    }

    public function listar()
    {
        return $this->banco->list();
    }
}
