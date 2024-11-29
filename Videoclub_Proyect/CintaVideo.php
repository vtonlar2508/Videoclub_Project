<?php
class CintaVideo extends Soporte {
        //CintaVideo es el hijo de Soporte, y por tanto Soporte es el padre de CintaVideo
        //CintaVideo hereda propiedades y métodos de su padre Soporte, y además puede añadirlos y reescribirlos
        private float $duracion; //Se añade una nueva propiedad solo de CintaVideo
                        
        public function muestraResumen() : void { 
                //El método muestraResumen se sobreescribe al método muestraResumen de la clase padre, sustituyéndolo
                //Este método no devuelve nada, solo imprime
                echo "Nombre: " . $this -> titulo . "<br>";
                echo "Precio base: " . $this -> precio . "<br>";
                echo "Precio + IVA: " . Soporte::getPrecioConIva() . "<br>";
                echo "Número: " . $this -> numero;
                echo "Duración: " . $this -> duracion;
        }
}
?>
