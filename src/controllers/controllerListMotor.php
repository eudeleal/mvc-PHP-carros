<?php
require_once '../models/motorDb.php'
class ControllerListmotor{
    private $motorDB;

    public function __construct(){
        $this->$motorDB=new MotorDB();
        $this->criarTabela(); }

    public function criarTabela(){
        $result = $this->MotorDB->getCarros();
        foreach ($result as $motor){
            echo("<tr>");
            echo("<td>$motor['motorID'].</th>");
            echo("<td>$motor['potencia'].</td>");
            echo("<td>$motor['qntCilindros'].</td>");
            echo("<td>$motor['chassi'].</td>");
            echo("href='../controllerDelete/editarmotor.php'?chassi=".$carro['chassi']."'>Editar Carro</a></>'")
        }
    }
}