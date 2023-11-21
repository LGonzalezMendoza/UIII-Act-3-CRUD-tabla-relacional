<?php
if(!isset($_GET["id"])) exit();
$id = $_GET["id"];
include_once "base_de_datos.php";
$sentencia = $base_de_datos->prepare("SELECT * FROM productos WHERE id = ?;");
$sentencia->execute([$id]);
$producto = $sentencia->fetch(PDO::FETCH_OBJ);
if($producto === FALSE){
	echo "¡No existe algún producto con ese ID!";
	exit();
}

?>
<?php include_once "encabezado.php" ?>
	<div class="col-xs-12">
		<h1>Editar producto con el ID <?php echo $producto->id; ?></h1>
		<form method="post" action="guardarDatosEditados.php">
			<input type="hidden" name="id" value="<?php echo $producto->id; ?>">
	
			<label for="id_producto">Código de barras:</label>
			<input value="<?php echo $producto->id_producto ?>"class="form-control" name="id_producto" required type="text" id="id_producto" placeholder="Escribe el id">

			<label for="nombreProducto">Nombre del Producto:</label>
			<input value="<?php echo $producto->nombreProducto ?>" required id="nombreProducto" name="nombreProducto" cols="30" rows="5" class="form-control">

			<label for="precio">Precio</label>
			<input value="<?php echo $producto->precio ?>" class="form-control" name="precio" required type="number" id="precio" placeholder="Precio ">

			<label for="color">Color del producto:</label>
			<input value="<?php echo $producto->color ?>"class="form-control" name="color" required type="text" id="color" placeholder="Color">

			<label for="existencia">Existencia:</label>
			<input value="<?php echo $producto->existencia ?>" class="form-control" name="existencia" required type="number" id="existencia" placeholder="Cantidad o existencia">

			<label for="modelo">Modelo del producto:</label>
			<input value="<?php echo $producto->modelo ?>"class="form-control" name="modelo" required type="text" id="modelo" placeholder="Modelo">

			<label for="tipo_de_instrumento">Tipo de instrumento:</label>
			<input value="<?php echo $producto->tipo_de_instrumento ?>"class="form-control" name="tipo_de_instrumento" required type="text" id="tipo_de_instrumento" placeholder="Tipo de instrumento">

			<label for="equipamiento">Equipamiento del producto:</label>
			<input value="<?php echo $producto->equipamiento ?>"class="form-control" name="equipamiento" required type="text"  id="equipamiento" placeholder="Equipamiento">

		    <label for="marca">Marca del producto:</label>
		    <input value="<?php echo $producto->marca ?>"class="form-control" name="marca" required type="text"   id="marca" placeholder="Marca">
			
			<br><br><input class="btn btn-info" type="submit" value="Guardar">
			<a class="btn btn-warning" href="./listar.php">Cancelar</a>
		</form>
	</div>
<?php include_once "pie.php" ?>
