<?php
/**
 * Clase creada por Josep Ingles
 * clase ordenador
 */
class ClaseOrdenador
{
  // Declaración de una propiedad
  public $color = 'Negro';
  public $tipo = 'portatil';
  public $tamano = '5';
  public $precio = '500';
  // Declaración de un método
  public function mostrarColor() {
      echo '<br>';
      echo 'El color del ordenador es:';
      echo $this->color;
      echo '<br>';
  }

  public function mostrarTipo() {
      echo '<br>';
      echo 'El tipo del ordenador es:';
      echo $this->tipo;
      echo '<br>';
  }

  public function mostrarTamano() {
      echo '<br>';
      echo 'El tamano del ordenador es:';
      echo $this->tamano;
      echo '<br>';
  }

  public function mostrarPrecio() {
      echo '<br>';
      echo 'El precio del ordenador es:';
      echo $this->precio;
      echo '<br>';
  }
  //Setter
  public function setColor($cambiarColor){
    $this->color=$cambiarColor;
  }
  public function setTipo($cambiarTipo){
    $this->tipo=$cambiarTipo;
  }
  public function setTamano($cambiarTamano){
    $this->tamano=$cambiarTamano;
  }
  public function setPrecio($cambiarPrecio){
    $this->precio=$cambiarPrecio;
  }
  //Getters
  public function getColor(){
    echo $this->color;
  }
  public function getTipo() {
    echo  $this->tipo;
  }
  public function getTamano() {
    echo  $this->tipo;
  }
  public function mostrarPrecio() {
    echo  $this->tipo;
  }

}
?>
