<?php


class Pessoa {
    public  $nome;//Atributo
    
    public function falar(){//metodo
        
        return "O meu nome é ".$this->nome;
    }
    
    
}
$joilson = new Pessoa();
$joilson->nome = "Joilson Stering";
echo $joilson->falar();
