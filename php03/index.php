<?php 
//criação da classe
    class Login {
        //atributos da classe
        private $email;
        private $senha;

        //método para acesso privado pelo get e set
        public function getEmail(){
            return $this->email;
        }
        //aqui foi utilizado um filtro de caractere
        public function setEmail($e){
            $email = filter_var($e, FILTER_SANITIZE_EMAIL);
            $this->email = $email;
        }

        public function getSenha(){
            return $this->email;
        }
        public function setSenha($s){
            $this->senha = $s;
        }
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
    $logar->setEmail("teste()@teste.com");
    $logar->setSenha("1234");
    $logar->Logar();

?>