<?php
// Se crea la clase dado
class dado
{

  // Se declaran los atributos y se declaran como privados
  private $minNumDado = 0;
  private $maxNumDado = 13;

  // Se declara el método que devolverá un número aleatorio entre los declarados dentro de la función ran de Math.
  public function tirarDado() {
      echo rand($this->minNumDado, $this->maxNumDado);
  }
  //Métodos get, que devuelven el valor de la variable de la clase
  public function getmaxNumDado(){
    return $this->maxNumDado;
  }
  public function getminNumDado() {
      echo $this->minNumDado;
  }
  //Métodos set, que modifica el valor de las variables de la clase
  public function setminNumDado($cambiarnummin){
   $this->minNumDado=$cambiarnummin;
 }
 public function setmaxNumDado($cambiarnummax){
   $this->maxNumDado=$cambiarnummax;
 }
}

?>
