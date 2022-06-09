<?php
require_once ROOT_PATH . "../models/database/IDatabase.php";

class DAO implements IDatabase {
    private $adapter;

    public function __construct(IDatabase $objeto)
    {
        $this->adapter = $objeto;
        $this->connect();
    }

    public function connect()
    {
        $this->adapter->connect();
    }

    public function insert($values, $data) {
        $this->adapter->insert($values, $data);
    }

    public function list($filters = "*") {
        $this->adapter->list($filters);
    }
}