<?php
class CintaVideo extends Soporte {
        private float $duracion;
                        
        public function MuestraResumen() : void { //Este método no devuelve nada, solo imprime
                echo "Nombre: " . $this -> titulo . "<br>";
                echo "Precio base: " . $this -> precio . "<br>";
                echo "Precio + IVA: " . Soporte::getPrecioConIva() . "<br>";
                echo "Número: " . $this -> numero;
                echo "Duración: " . $this -> duracion;
        }
}
?>
