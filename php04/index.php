<?php
    class Login{
    //atributos da classe
        private $email;
        private $senha;

    //passando pelo método de construção
    public function __construct($email, $senha)
    {
        $this->setEmail($email);
        $this->setSenha($senha);
    }

    //passando pelos métodos get e set
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

    //método da classa
    public function Logar(){
        if($this->email == "lucian@gmail.com" and $this->senha == "123456"):
            echo "Logado com Sucesso";
        else:
            echo "Dados Invalidos";
        endif;
    }
}

//instanciando a classe
$logar = new Login("lucian@gmail.com", "123456");
//chamando o método
$logar->Logar();
?>