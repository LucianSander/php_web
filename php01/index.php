<?php 
class Pessoa {
  //atributos
  public $nome;
  public $idade;
  //método falar
  public function Falar(){
    //imprimindo na tela (uso de concatenar)
    echo $this->nome. " de " .$this->idade. " acabou de falar";
  }

}

//estanciar a classe
$lucian = new Pessoa();
$lucian->nome = "Lucian Sander";
$lucian->idade = 21;
$lucian->Falar();
?>