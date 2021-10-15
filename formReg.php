<?php
    include("../Distrisoltec/conexion.php");
    $nombre = $_POST["nombre"];          
    $razon = $_POST["razonSocial"];        
    $correo = $_POST["email"];          
    $numero = $_POST["telefono"];
    $contrasena = $_POST["contrasena"];
    $terminos = $_POST["terminos"];          
    $insertsql = "INSERT INTO usuarios(nombre,razonSocial,correoElectronico,numeroContacto,contrasena,terminos) 
    VALUES ('$nombre','$razon','$correo','$numero','$contrasena','$terminos')";
    $resultado = mysqli_query($conexion,$insertsql);
    if($resultado){
        echo"<script>alert('Se creo el registro correctamente'); window.location='registro.html'</script>";
    }else{
        printf("Errormessage: %s\n", mysqli_error($conexion));
    }
?>
