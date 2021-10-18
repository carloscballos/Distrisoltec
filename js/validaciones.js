var re = /^[^@]+@[^@]+\.[a-zA-Z]{2,}$/;
var contra = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/;
function limpiarErrores(){
    var errores = document.getElementsByClassName("error");
    for(var i = 0; i < errores.length; i++){
      errores[i].innerHTML = "";
    }
  }
function validaciones (formulario){
    limpiarErrores();
    if (!re.test(formulario.email.value)) {
        document.getElementById("errorEmail").innerText = "El correo debe contener @ y un dominio";
        
                ;
        return false;
        }
    if (!contra.test(formulario.contrasena.value)){
        document.getElementById("errorContrasena").innerText = "La contraseña debe contener minimo 8 caracteres entre letras y numeros";
        
        return false;
        }
    if (formulario.contrasena.value != formulario.repContrasena.value) {
            document.getElementById("errorRepContrasena").innerText = "Las contraseñas no coinciden";
            
            return false;
        }     
    return true;
    alert("Registro creado exitosamente")
}