<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Documento
 *
 * @author jstering
 */
class Documento {

    private $numero;

    public function getNumero()
            {

        return $this->numero;
    }

    public function setNumero($n)
            {
        $this->numero = $n;
    }

}

class CPF extends Documento {

    public function validar(): bool
        {
        
        $numeroCPF = $this->getNumero();
        
                //aqui vai o codigo para validar o CPF

        return true;
    }

}
$doc = new CPF();
$doc->setNumero("111222333-44");
var_dump($doc->validar());
echo "<br/>";
echo $doc->getNumero();