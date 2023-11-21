<?php include_once "encabezado.php" ?>
<?php
include_once "base_de_datos.php";
$sentencia = $base_de_datos->query("SELECT * FROM productos;");
$productos = $sentencia->fetchAll(PDO::FETCH_OBJ);
?>

	<div class="col-xs-12">
		<h1>Productos</h1>
		<div>
			<a class="btn btn-success" href="./formulario.php">Nuevo <i class="fa fa-plus"></i></a>
		</div>
		<br>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>ID</th>
					<th>ID Producto</th>
					<th>Nombre Producto</th>
					<th>Precio</th>
					<th>Color </th>
					<th>Existencia</th>
					<th>Modelo</th>
					<th>Tipo De Instrumento</th>
					<th>Equipamiento</th>
					<th>Marca</th>
					<th>Editar</th>
					<th>Eliminar</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($productos as $producto){ ?>
				<tr>
					<td><?php echo $producto->id ?></td>
					<td><?php echo $producto->id_producto ?></td>
					<td><?php echo $producto->nombreProducto ?></td>
					<td><?php echo $producto->precio ?></td>
					<td><?php echo $producto->color ?></td>
					<td><?php echo $producto->existencia ?></td>
					<td><?php echo $producto->modelo ?></td>
					<td><?php echo $producto->tipo_de_instrumento ?></td>
					<td><?php echo $producto->equipamiento ?></td>
					<td><?php echo $producto->marca ?></td>
					<td><a class="btn btn-warning" href="<?php echo "editar.php?id=" . $producto->id?>"><i class="fa fa-edit"></i></a></td>
					<td><a class="btn btn-danger" href="<?php echo "eliminar.php?id=" . $producto->id?>"><i class="fa fa-trash"></i></a></td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
<?php include_once "pie.php" ?>