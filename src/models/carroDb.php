<?php

class CarroDb{
    protected $mysqli;

    public function __construct(){

    }

    public function conexao(){
        $this->mysqli = mysqli(DB_SERVIDOR, DB_USUARIO, DB_SENHA, DB_BANCO);
    }

    public function setCarro($marca, $modelo, $cor) {
        $sql = $this->mysqli->prepare("INSET INTO Carros ('')")
    }

    public function getCarros(){
        $sql = $this->query("SELECT * FROM Carros");
        while($row=sql->fetch_array(MYSQLI_ASSOC))
            $array[]=$row;
        }
        return $array;
    }

    public function deleteCarro($chassi){
        $sql = $this->mysqli->prepare("DETETE FROM 'Carros' WHERE 'chassi' = ?")
        $sql->bind_param("s",$chassi)
    }
}