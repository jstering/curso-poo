<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Pessoa
 *
 * @author jstering
 */
class Pessoa {
    public $nome = "Rasmus Lerdorf";
    protected $idade = 48;
    private $senha = "123456";
    
    public function verDados(){
        echo $this->nome . "<br/>";
            echo $this->idade . "<br/>";
                echo $this->senha . "<br/>";
    }
}

$objeto = new Pessoa();
//echo $objeto->nome . "<br/>";
//echo $objeto->idade . "<br/>";
//echo $objeto->senha . "<br/>";

$objeto->verDados();