<?php
require_once '../models/carroDb.php'
class ControllerListCarro{
    private $carroDb;

    public function __construct(){
        $this->carroDb = new CarroDb();
        $this->criarTabela();
    }

    public function criarTabela(){
        $result = $this->carroDb->getCarros();
        foreach ($result as $carro){
            echo("<tr>");
            echo("<td>$carro['chassi'].</th>");
            echo("<td>$carro['marca'].</td>");
            echo("<td>$carro['modelo'].</td>");
            echo("<td>$carro['cor'].</td>");
            echo("href='../controllerDelete/editarCarro.php'?chassi=".$carro['chassi']."'>Editar Carro</a></>'"")
        }
    }
}