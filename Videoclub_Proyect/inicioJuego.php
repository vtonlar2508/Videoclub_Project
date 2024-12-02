<?php
include "Juego.php"; //Se le dice al archivo que lea CintaVideo.php con la clase CintaVideo para aque pueda usarla

$miJuego = new Juego("The Last Of Us Part II", 26, 49.99, "PS4", 1, 1); //Hacemos una nueva variable $miCinta que es un objeto de la clase CintaVideo
echo "<strong>" . $miJuego->titulo . "</strong>"; //Imprimimos la variable titulo del objeto $miCinta en negrita
echo "<br>Precio: " . $miJuego->getPrecio() . " euros"; //Imprimimos la variable precio del objeto $miCinta
echo "<br>Precio IVA incluido: " . $miJuego->getPrecioConIVA() . " euros<br>"; //Imprimimos el resultado del método getPrecioConIVA del objeto $miCinta
//He puesto un salto de línea al final del echo anterior por motivos estéticos
$miJuego->muestraResumen(); //Ejecutamos la función muestraResumen() del $miCinta
?>