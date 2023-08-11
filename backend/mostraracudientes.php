<?php

?>
<!doctype html>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >
		<title>document</title>
		<style type="text/css">
			div{
				background: azure;
			}
		</style>
	<link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
		

	</head>
<body style="backgroun-color: beige"><center>
<nav class="navbar navbar-expand-lg bg-body" data-bs-theme="body">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Psicologia</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="formusu.php">Registrar pacientes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="mostrarpacientes.php">Mostrar pacientes</a>
        </li>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="formularioacudientes.html">Registrar acudientes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="mostraracudientes.php">Mostrar acudientes</a>
        </li>
        
    </div>
  </div>
</nav>
	<div class="container">	
	<div style="text-align:center;">
			<h1>MOSTRAR ACUDIENTES</h1>
			
			<form action="" method="get">
				<input type="text" class="form-control" name="textobuscar" id="" placeholder="Digite el indicio de busqueda">
				<button type="submit" class="btn btn-success" name="btn" >Buscar</button>
		    </form>


			<fielset style="background-color: aliceblue";>
			<div class="table-responsive">
			    <table class="table table-primary">
					<thead>
			            <tr>
			                <th>Documento</th>
			    			<th>Nombre</th>
			    			<th>Apellido</th>
			    			<th>Correo</th>
			    			<th>Telefono</th>
							<th>Acciones</th>
						</tr>
		            </thead>
			<?php

			if(isset($_GET['textobuscar'])) {
				//capturo lo que digitó el usuario en la  búsqueda
				$buscar=$_GET['textobuscar'];
				$buscar="%$buscar%";

			include 'conexion.php';
			$consulta="select * from acudientes WHERE nombres LIKE '$buscar' OR apellidos LIKE '$buscar' OR correo LIKE '$buscar' OR telefono LIKE '$buscar' OR documentoa LIKE '$buscar' ";
			$resultado= mysqli_query($conexion,$consulta);
			while($vec=mysqli_fetch_array($resultado)){?>
			<tbody>
			    <tr class="">
				    <td> <?php echo $vec[0] ?> </td>
					<td> <?php echo $vec[1] ?> </td>
					<td> <?php echo $vec[2] ?> </td>
					<td> <?php echo $vec[3] ?> </td>
					<td> <?php echo $vec[4] ?> </td>
					<td>
<!--creo un hipervinculo y mando una variable con la pk por el metodo GET-->
					<a href="formularioacudientesact.php?doc=<?php echo $vec[0] ?>">Act</a>
					<a href="formularioacudienteselim.php?doc=<?php echo $vec[0] ?>">Elim</a>
			    </td>
			</tr>
		<?php } 
	       } ?>
		    
		    </table>
	        </fielset>
			<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    </body>
</html>
			