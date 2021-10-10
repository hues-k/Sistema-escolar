
$(".btnEditarAlumno").click(function(){

	var idUsuario = $(this).attr("idAlumno");
	 var datos = new FormData();
	 datos.append("idUsuario",idUsuario);

	 $.ajax({
	 	
	 	url:"ajax/alumnos.ajax.php",
	 	method:"POST",
	 	data: datos,
	 	cache: false,
	 	contentType:false,
	 	processData:false,
	 	dataType: "json",
	 	success: function(respuesta){
	 		console.log("respuesta",respuesta);
	 	}




	 });
})











$(".btnEliminarUsuario").click(function(){
	var idUsuario = $(this).attr("idUsuario");

	swal({
		title:"¿Esta seguo de eliminar el usuario?",
		text: "¡Si no lo esta puede cancelar la accion!",
		type: "warning",
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor:'#d33',
		cancelButtonText: 'Cancelar',
		confirmButtonText: 'Si, borrar usuario'
	}).then((result)=>{
		if (result.value){
			
		}
	})
})