<?php 
class KarateChop {
  var $stack = array("A","B","C","D","E","F");

  function SelectionData() {
     $mitad = count($stack)/2;

     $position = array_search(C, $stack);
     if ($position < $mitad) {
       $MostrarDatosInicio = ["A","B","C"];
       echo $MostrarDatosInicio
     }
     else {
       $MostrarDatosFin = ["D","E","F"];
     }

  }

}

?>
