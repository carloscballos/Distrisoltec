<?php
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];
session_start();
$_session['usuario']=$usuario;
include("../Distrisoltec/conexion.php");
$consulta = "SELECT * FROM usuarios WHERE correoElectronico = '$usuario' and contrasena = '$contrasena'";
$resultado = mysqli_query($conexion,$consulta);
$filas = mysqli_num_rows($resultado);
if($filas){
    header("location:home.html");
}else{
    include("../Distrisoltec/inicioSesion.html");
    ?>
    <h1>error en la autenticacion</h1>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
?>
