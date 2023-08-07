<?php 
//criação da classe
    class Login {
        //atributos da classe
        public $email;
        public $senha;
        //método da classe
        public function Logar(){
            if($this->email == "teste@teste.com" and $this->senha == "1234"):
            echo "Logado com Sucesso";
            else:
            echo "Dados Invalidos";
        endif;
        }
    }
    //estanciar a classe
    $logar = new Login();
    $logar->email="teste@teste.com";
    $logar->senha="1234";
    $logar->Logar();

?>