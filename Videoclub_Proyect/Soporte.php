<html>
	<head>
	<meta charset="UTF-8">
	</head>
	<body>
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
		    
		    public function getPrecioIva() : float {
		        return $this -> precio * 1.21;
		    }
		    
		    public function getNumero() : int {
		        return $this -> numero;
		    }
		    
		    public function getResumen() : void {
		        echo "Nombre: " . $this -> nombre;
		        echo "Precio base: " . Soporte::getPrecio();
		        echo "Precio + IVA: " . Soporte::getPrecioIva();
		        echo "Número: " . Soporte::getNumero();
		    }
		}
	?>
	</body>
</html>
