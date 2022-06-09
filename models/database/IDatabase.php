<?php
interface IDatabase
{
    public function connect();

    public function insert($values, $data);
    
    public function list($filters = "*");
}
