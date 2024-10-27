<?php

class UserModel extends Database
{

    private $mysqli;

    public function __construct()
    {
        $this->mysqli = $this->getConnection();
    }

    public function fetch()//Buscar por registros
    {
  
        $sql = "SELECT * FROM usuario";
        $query = mysqli_query($this->mysqli, $sql);
        return mysqli_fetch_all($query);
        
    }

    public function fetchById($id)//Buscar registros por ID
    {
        $sql = "SELECT * FROM usuario WHERE id='$id'";
        $query = mysqli_query($this->mysqli, $sql);
        $result = mysqli_fetch_all($query);
        return $result[0];
    }
    
    public function query($sql)//Realizar consulta no banco
    {
        mysqli_query($this->mysqli, $sql);
        return true;
    }
    
}