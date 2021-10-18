<?php    
    include("../Distrisoltec/conexion.php");
    $nombre = $_POST["nombre"];          
    $razon = $_POST["razonSocial"];        
    $correo = $_POST["email"];          
    $numero = $_POST["telefono"];       
    $fecha = $_POST["fecha"];          
    $hora = $_POST["hora"];          
    $direccion = $_POST["direccion"];          
    $motivo = $_POST["observacion"];

    $insertsql = "INSERT INTO visitas(nombre,razonSocial,correoElectronico,numeroContacto,fecha,hora,direccion,motivo) 
    VALUES ('$nombre','$razon','$correo','$numero','$fecha','$hora','$direccion','$motivo')";
    $resultado = mysqli_query($conexion,$insertsql);
    if($resultado){
        echo"<script>alert('Se agendo la cita correctamente'); window.location='registro.html'</script>";
    }else{
        printf("Errormessage: %s\n", mysqli_error($conexion));
    }
?>