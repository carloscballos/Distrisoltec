<?php    
    $conexion = mysqli_connect("localhost","root","","distrisoltec");
    if(!$conexion){
        echo"Conexion Erronea";
    }else{
        echo"Conexion Realizada Satisfactoriamente";
        }
?>