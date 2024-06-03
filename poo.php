<h1>Programação orientada a objeto em PHP</h1>
<?php 

    class Caneta{
        var $cor;
        var $marca;
        var $tampado =  true;

        function abrir_tampa(){
            if($this->tampado ==true){
                $this -> tampado = false;
            }else{
                $tampado = true;
            }
        }
        function escrever(){
            if($this->tampado){
                echo " ";
            }else{
                echo "<i style = 'color: $this->cor'>Escrevendo...</i>";
                echo "<hr>";
            }
        }


    }

    class Estoque{
        var $item;

        function add_item(){

        }


        function del_item(){

        }
    }

    $joran_pen = new Caneta;
    $milena_pen = new Caneta;

    $joran_pen->abrir_tampa();
    $joran_pen->escrever();

    $joran_pen->cor = "Blue";
    $joran_pen->marca = "Bic";

    $milena_pen->abrir_tampa();
    $milena_pen->escrever();

    $milena_pen->cor = "Pink";
    $milena_pen->marca = "Monblanc"; 

?>