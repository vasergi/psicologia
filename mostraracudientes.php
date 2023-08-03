<?php
include 'conexion.php';
$consulta="select * from acudientes";
$resultado= mysqli_query($conexion,$consulta);
?>
<!doctype html>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >
		<title>document</title>
		<style type="text/css">
			div{
				background: lightslategray;
			}
		</style>

	</head>
	<body>
		<div style="text-align:center;">
			<h1>MOSTRAR ACUDIENTES</h1>
			<fielset style="background-color: lightslategray;>
			<table>
			<tr>
			    <td>Documento</td>
			    <td>Nombre</td>
			    <td>Apellido</td>
			    <td>Correo</td>
			    <td>Telefono</td>
			</tr>
			<?php
			while($vec=mysqli_fetch_array($resultado)){?>
			<tr>
				<td> <?php echo $vec[0] ?> </td>
				<td> <?php echo $vec[1] ?> </td>
				<td> <?php echo $vec[2] ?> </td>
				<td> <?php echo $vec[3] ?> </td>
				<td> <?php echo $vec[4] ?> </td>
			</tr>
		<?php } ?>
		    
		    </table>
	        </fielset>
    </body>
</html>
			