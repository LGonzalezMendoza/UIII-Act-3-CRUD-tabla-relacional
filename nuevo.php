<?php
#Salir si alguno de los datos no está presente
if(!isset($_POST["id_producto"]) || !isset($_POST["nombreProducto"]) || !isset($_POST["precio"]) || !isset($_POST["color"]) || !isset($_POST["existencia"]) || !isset($_POST["modelo"]) || !isset($_POST["tipo_de_instrumento"]) || !isset($_POST["equipamiento"]) || !isset($_POST["marca"])) exit();

#Si todo va bien, se ejecuta esta parte del código...

include_once "base_de_datos.php";
$id_producto = $_POST["id_producto"];
$nombreProducto = $_POST["nombreProducto"];  
$precio = $_POST["precio"];
$color = $_POST["color"];
$existencia = $_POST["existencia"];
$modelo = $_POST["modelo"];
$tipo_de_instrumento = $_POST["tipo_de_instrumento"];
$equipamiento = $_POST["equipamiento"];
$marca = $_POST["marca"];

$sentencia = $base_de_datos->prepare("INSERT INTO productos(id_producto, nombreProducto, precio, color, existencia, modelo, tipo_de_instrumento, equipamiento, marca) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?);");
$resultado = $sentencia->execute([$id_producto, $nombreProducto, $precio, $color, $existencia, $modelo, $tipo_de_instrumento, $equipamiento, $marca]);

if($resultado === TRUE){
	header("Location: ./listar.php");
	exit;
}
else echo "Algo salió mal. Por favor verifica que la tabla exista";


?>
<?php include_once "pie.php" ?>