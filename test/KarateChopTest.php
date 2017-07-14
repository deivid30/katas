<?php

use PHPUnit\Framework\TestCase;

class KarateChopTest extends TestCase {
  protected $binary;

  protected function setUp() {
    $this->binary = Array();
  }
  public function testNewArrayIsEmpty() {
    // Esto me comprueba que el array está a 0
    $this->assertEquals(0, sizeof($this->binary));
  }

  public function testPushAndPop() {
    $stack = ["A", "B", "C", "D", "E", "F"];


    // Comprobar cuantos valores tiene el array
    $this->assertEquals(6,count($stack));
    $mitad = count($stack) / 2;
    $this->assertEquals(3,$mitad);


    // Comprobar que posicion ocupa dentro del array
    $posicion = array_search("C", $stack);
    if ($posicion < $mitad) {
      $lista = ["A","B","C"];
      $this->assertEquals(3,count($lista));
    }

   // Crear las dos opciones


    // separar en dos la lista de arrays
    //$this->assertEquals(2,count($stack));
    //$mitad = count($stack)/2;
    //$this->assertEquals(1, $mitad);


  }





}

?>
