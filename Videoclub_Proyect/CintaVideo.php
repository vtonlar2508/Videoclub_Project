<html>
	<head>
	<meta charset="UTF-8">
	</head>
	<body>
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
	</body>
</html>