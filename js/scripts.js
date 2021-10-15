$(document).ready(function(){
  $('.cinta').slick({
  slidesToShow: 3,  
  centerMode: true,
  autoplay: true,
  autoplaySpeed: 1000,
  arrows: false
  });
});
$(function () {
  $("#agenda").datepicker({        
      format: "dd/mm/yyyy",
      todayBtn: 'linked',
      language: "es",
      todayHighlight: true,
      daysOfWeekDisabled: "0",
      autoclose: true,
      datesDisabled: ['18/10/2021','01/11/2021','15/11/2021','08/12/2021','25/12/2021']
  });
});

$(function(){
  $('#hora').clockpicker({
      donetext: "<b>"+'Hecho'+"</b>"
  }
  )
});

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