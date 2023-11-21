<?php include_once "encabezado.php" ?>

<div class="col-xs-12">
	<h1>Nuevo producto</h1>
	<form method="post" action="nuevo.php">
		<label for="id_producto">Id producto:</label>
		<input class="form-control" name="id_producto" required type="text" id="id_producto" placeholder="Escribe el id">

		<label for="nombreProducto">Nombre del Producto:</label>
		<input required id="nombreProducto" name="nombreProducto" cols="30" rows="5" class="form-control">

		<label for="precio">Precio</label>
		<input class="form-control" name="precio" required type="number" id="precio" placeholder="Precio ">

		<label for="color">Color del producto:</label>
		<input class="form-control" name="color" required type="text" id="color" placeholder="Color">

		<label for="existencia">Existencia:</label>
		<input class="form-control" name="existencia" required type="number" id="existencia" placeholder="Cantidad o existencia">

		<label for="modelo">Modelo del producto:</label>
		<input class="form-control" name="modelo" required type="text" id="modelo" placeholder="Modelo">

		<label for="tipo_de_instrumento">Tipo de instrumento:</label>
		<input class="form-control" name="tipo_de_instrumento" required type="text" id="tipo_de_instrumento" placeholder="Tipo de instrumento">

		<label for="equipamiento">Equipamiento del producto:</label>
		<input class="form-control" name="equipamiento" required type="text"  id="equipamiento" placeholder="Equipamiento">

		<label for="marca">Marca del producto:</label>
		<input class="form-control" name="marca" required type="text"   id="marca" placeholder="Marca">



		<br><br><input class="btn btn-info" type="submit" value="Guardar">
	</form>
</div>
<?php include_once "pie.php" ?>