<?php

class Select
{

  private $texto;
  private $valor;





public function __construct($texto, $valor)
{
  $this->texto = $texto;
  $this->valor = $valor;
}


public function imprimete()
{
  return "<option value=$this->value>$this->texto</option>";

}




}


 ?>
