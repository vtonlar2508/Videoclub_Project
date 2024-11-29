<?php
class Soporte{
    public string $titulo;
    protected int $numero;
    private float $precio;
    
    public function __construct($titulo, $numero, $precio){
        $this -> titulo = $titulo;
        $this -> numero = $numero;
        $this -> precio = $precio;
    }
    
    public function getPrecio(): float {
        return $this -> precio;
    }
    
    public function getPrecioConIVA() : float {
        return $this -> precio * 1.21;
    }
    
    public function getNumero() : int {
        return $this -> numero;
    }
    
    public function MuestraResumen() : void {
        echo "Nombre: " . $this -> titulo . "<br>";
        echo "Precio base: " . $this -> precio . "<br>";
        echo "Precio + IVA: " . Soporte::getPrecioConIva() . "<br>";
        echo "Número: " . $this -> numero;
    }
}
?>
