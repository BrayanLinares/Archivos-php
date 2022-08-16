<?php 

#EL INDEX: En él mostraremos la salida de las vistas al usuario y también al ususario y también a traves de él enviaremos las distintas acciones que el usuario envíe al controlador.

#require() establece que el código del archivo invocado es requerido, es decir, obligatorio para el funcionamiento del programa. Por ello, si el archivo especificado en la función require() np se encuentra saltará un error "PHP Fatal error" y el progra,a PHP se detendrá. 

#La versión require_once() funcionan de la misma forma que sus respectivo, salvo que, al utilizar la versión_once, se impide la carga de un mismo archivo más de una vez. 
#SI requerimos el mismo código más de una vez corremos el riesgo de redeclaraciones de variable, funciones o clases. 

require_once "controladores/plantilla.controlador.php";

require_once "controladores/formularios.controlador.php";
require_once "modelos/formularios.modelo.php";

$plantilla = new ControladorPlantilla();
$plantilla -> ctrTraerPlantilla();

?>