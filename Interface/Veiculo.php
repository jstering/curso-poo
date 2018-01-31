<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author jstering
 */
interface Veiculo {

    public function acelerar($velocidade);

    public function freiar($velocidade);

    public function trocarMarcha($marcha);
}

class Civic implements Veiculo {

    public function acelerar($velocidade)
    {
        echo "O veiculo acelerou até" . $velocidade . "km/h";
    }

    public function freiar($velocidade)
            
    {
        echo "O veiculo freiou  até" . $velocidade . "km/h";
    }
    public function trocarMarcha($marcha) 
    {
        echo "O veiculo engatou a marcha". $marcha ;
    }
}

$carro = new Civic();

$carro->trocarMarcha(1);