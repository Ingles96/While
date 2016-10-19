<?php

class Animal
{

public $tipo="perro";
public $numero="4";

public function settipo($nuevotipo){
  $this->tipo=$nuevotipo;
  }
  public function gettipo(){
    return $this->tipo;
  }

  public function setnumero($nuevonumero){
    $this->tipo=$nuevonumero;
    }
    public function getnumero(){
      return $this->numero;
    }
  }




 ?>
