<?php
if (isset($_POST['Ingresar,'])){
    $User =$_POST[''];
    $pas =$_POST[''];
    include 'conexion.php';
    $conexion=conectar();
    $consulta="select * from usuario where correo='".$User."'";
    echo $consulta;
    $res=mysqli_query($conexion,$consulta);
    $fila=mysqli_num_rows($res)
    if ($fila>0){
        $u=mysqli_fetch_array($res);
        if($u['clave']==$pas){
            session_start();
            $_SESSION['tipo']=$u['tipo'];
            $_SESSION['name']=$u['nombre'];
            echo $u['tipo'];
            switch($u['tipo']){
                case 0:
                    echo 'Bienvenido';
                    header("location:")
                    break;
                case 1:
                    echo "Bienvenido usuario:" .$_SESSION['name']
                    header ("location:../index.php");
                    break;
            }
        }
    else{
        echo "su clave es erronea!";
    }
    }
    else{
        echo "el usuario no existe en la base de datos";
    }
    }