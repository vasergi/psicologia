<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>FORMULARIO</title> 
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <body>
    <center><h1>REGISTRO DE PACIENTES</h1></center>
    <body style="background-color:aliceblue;">
    
    </body>
</head>
<style type="text/css">
    .vale{
        background-color: beige;
        width: 150PX;
        height: 25px;
        border: 1px solid black;
        border-radius: 8px;
    }
    .serna{
        background-color: black;
        width: 100PX;
        height: 25px;
        border: 1px solid black;
        border-radius: 8px;
        color: white;
    }

</style>
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
        

       
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
   <div class="container">
   <fieldset style=" background-color: gray; width:625px; height:480px; margin:5px; border-radius:10px; padding-top:10px;">
    
    <form action="regpacientes.php" method="post"><center>
        <label><b>Documento:</b></label><br>
        <input class="form-control" type="number" name="documento" placeholder="Documento" id="documento"><br>
        <label><b>Nombre:</b></label><br>
        <input class="form-control" type="text" name="nombre" placeholder="Nombre" id="nombre"><br>
        <label><b>Apellidos:</b></label><br>
        <input class="form-control" type="text" name="apellidos" placeholder="Dos apellidos" id="apellidos"><br>
        <label><b>Telefono:</b></label><br>
        <input class="form-control " type="number" name="telefono" placeholder="Telefono" id="telefono"><br>
        <label><b>Correo:</label><br>
        <div class="input-group mb-3">
        <input class="form-control" type="email" name="correo" placeholder="Correo" id="correo"><br>
        <span class="input-group-text" id="basic-addon2">@gmail.com</span>
       </div>
        
         
        <input class="serna" type="submit" name="Enviar"></center></form></body>
    </form></fieldset></center>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</div>
</body>
</html>