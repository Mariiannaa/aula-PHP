<?php 
    class Carro{
        private $cor;
        private $marca;
        private $modelo;
        private $ligado = false;

        function ligar(){
            if($this->ligado == false){
                echo "O carro está ligado!!!";
                $this->ligado = true;
            }else{
                echo "Erro, o carro já está ligado!";
            }
            
        }

        function desligar(){
            if($this->ligado==true){
                $this->ligado = false;
                echo "O carro está desligado";
            }else{
                echo "Erro, o carro já está desligado!";
            }
        }

        function get_cor(){
            return $this->cor;
        }

        function set_cor($nova_cor){
            $this->cor = $nova_cor;
        }

        function get_marca(){
            return $this->marca;
        }

        function set_marca($nova_marca){
            $this->marca = $nova_marca;
        }

        function get_modelo(){
            return $this->modelo;
        }

        function set_modelo($novo_modelo){
            $this->modelo = $novo_modelo;
        }

        function andar(){
            if($this->ligado == true){
                echo "🚗";
            }else{
                echo "Você precisa ligar o carro para poder andar!";
            }

        }

    }

    $novo_carro = new Carro;

    $novo_carro->set_cor("Azul");
    $novo_carro->set_marca("Chevrolet");
    $novo_carro->set_modelo("Celta");

    

?>