/*-------  Validar registro------*/

function validarRegistro(){
	var codi = document.querySelector("#alumnoRegistro").value;
	if (codi != "") {
var caracteres = codi.length;
if (caracteres > 4){
	document.querySelector("label[for='alumnoRegistro']").innerHTML+= "<br>Escribe al menos 4 cifras ";
		return false;
}

	}





return true;

	

}

function validarMateria(){
	var codiM = document.querySelector("#CodiMa").value;
	if (codiM != "") {
var caracteres = codiM.length;
if (caracteres > 5){
	document.querySelector("label[for='CodiMa']").innerHTML+= "<br>Escribe al menos 5 cifras ";
		return false;
}

	}





return true;

	

}



/*----------- Checar id existente-------------*/
$("#alumnoRegistro").change(function(){
var usuario = $(this).val();

var datos = new FormData();
datos.append("validarusuario",usuario);

 $.ajax({
 	url: "ajax/alumnos.ajax.php",
 	method:"POST",
 	data:datos,
 	cache:false,
 	contentType:false,
 	processData:false,
 	success:function(datos){
 		alert(datos);
 		
 		$("#res_user").html(datos);
 	}

 })

})
