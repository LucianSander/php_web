<?php 

    class Veiculo {
        public $cor;
        public $ano;
        public $modelo;
    
    public function Andar(){
        echo "Estou andando ";
    }

    public function Para(){
        echo "Estou parando ";
    }
    
    }

    class Carro extends Veiculo{
        public function Ligarlimpador(){
            echo "Limpador Ligado ";
        }
    }

    class Moto extends Veiculo {
        public function Ligarmoto(){
            echo "Moto Ligada ";
        }
    }

$carro = new Carro();
$carro->cor = "Vermelho";
$carro->ano = "2013";
$carro->modelo = "Gol";
$carro->Andar();
$carro->Ligarlimpador();
var_dump($carro);

echo "<br>";
echo "<br>";

$moto = new Moto();
$moto->cor = "Azul";
$moto->ano = "2022";
$moto->modelo = "Biz";
$moto->Para();
$moto->Ligarmoto();
var_dump($moto);

?>