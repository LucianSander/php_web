<?php
    class Login{
        private $email;
        private $senha;

    public function getEmail(){
        return $this->email;
    }

    public function setEmail($e){
        $this->email = $e;
    }

    public function getSenha(){
        return $this->senha;
    }

    public function setSenha($s){
        $this->senha = $s;
    }

    public function Logar(){
        if($this->email == "lucian@gmail.com" and $this->senha == "123456"):
            echo "Logado com Sucesso";
        else:
            echo "Dados Invalidos";
        endif;
    }
}   
$logar = new Login();
$logar->setEmail("lucian@gmail.com");
$logar->setSenha("123456");
$logar->Logar();
?>