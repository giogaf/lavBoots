<script>

$( "#btn_delete" ).click(function() {
	swal({   title: "Eliminar?",  
	 text: "Confirma eliminar?",  
	 type: "warning",   showCancelButton: true,  
	 confirmButtonColor: "#DD6B55",   
	 confirmButtonText: "Si",  
	 cancelButtonText: "No",   
	 closeOnConfirm: false,   closeOnCancel: false }, 
	  function(isConfirm){   
	  	if (isConfirm) {     		  		  
	  		$('#form_delete').submit();
	  		swal("Eliminado", "", "success"); 
	  	}
	  	 else { 
	  	 	swal("Cancelado", "", "error");   

	  	 } 
	  }
	);
});

</script>