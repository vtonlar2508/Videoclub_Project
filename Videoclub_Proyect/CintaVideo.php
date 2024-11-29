<?php
        class CintaVideo extends Soporte {
        private float $duracion;
                
        public function getResumen() : void {
                echo "Nombre: " . $this -> nombre;
                echo "Precio base: " . Soporte::getPrecio();
                echo "Precio + Iva: " . Soporte::getPrecioIva();
        	echo "Número: " . Soporte::getNumero();
        }
}
?>
