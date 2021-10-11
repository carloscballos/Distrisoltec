<?php    
    $conexion = mysqli_connect("localhost","root","","distrisoltec");
    if(!$conexion){
        echo"Conexion Erronea";
    }else{
        echo"Conexion Realizada Satisfactoriamente";
        }
    $nombre = $_POST["nombre"];          
    $razon = $_POST["razonSocial"];        
    $correo = $_POST["email"];          
    $numero = $_POST["telefono"];       
    $terminos = $_POST["terminos"];          
    $insertsql = "INSERT INTO usuarios(nombre,razonSocial,correoElectronico,numeroContacto,terminos) 
    VALUES ('$nombre','$razon','$correo','$numero','$terminos')";
    $resultado = mysqli_query($conexion,$insertsql);
    if($resultado){
        echo"<script>alert('Se creo el registro correctamente'); window.location='registro.html'</script>";
    }else{
        printf("Errormessage: %s\n", mysqli_error($conexion));
    }
?>
