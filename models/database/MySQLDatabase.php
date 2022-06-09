<?php
require_once "IDatabase.php";

class MySQLDatabase implements IDatabase
{
    private $usuario = "root";
    private $host = "localhost";
    private $senha = "";
    private $banco = "pweb";

    private $conexao;

    public function __construct()
    {
        $this->connect();
    }

    public function connect()
    {
        $this->conexao = new PDO("mysql:host=$this->host;dbname=$this->banco", $this->usuario, $this->senha);
    }

    public function insert($values, $data)
    {
        return $this->conexao->prepare("INSERT INTO usuarios ($values) VALUES ($data)");
    }

    public function list($filters = "*")
    {
        $stmt = $this->conexao->prepare("SELECT $filters FROM usuarios");
        $stmt->execute();
        return $stmt->fetchAll();
    }
}
