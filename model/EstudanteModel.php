<?php

require_once $_SERVER ['DOCUMENT_ROOT'] . '/aula3/model/DataBase.php';

class EstudanteModel 
{
    private string $nome;

    private int $idade;

    private $database;

/**get and set */
public function __construct()
{
    $this->database = new DataBase();
}

public function listarModel(): array 
{
    // $array = array(1,2,3,4,5)
    // $array = [ ]
    $dadosArray = $this->database->executeSelect("SELECT * FROM estudantes"); 
        
    return $dadosArray;

}
   
public function salvarModel(string $nome, int $idade) 
{
    $sql = "INSERT INTO estudantes (nome, idade) values ('$nome', '$idade')";
    $this->database->insert($sql);

}

}