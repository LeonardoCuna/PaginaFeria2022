$(function() {

	'use strict';

	// Form

	var contactForm = function() {

		if ($('#contactForm').length > 0 ) {
			$( "#contactForm" ).validate( {
				rules: {
					nombre: "required",
					fecha: "required",
					apellido: "required",
					sexo: "required",
					cedula: "required",
					fnacimiento: "required",
					ciudad: "required",
					departamento: "required",
					pais: "required",
					nacionalidad: "required",
					domicilio: "required",
					oDomicilio: "required",
					telefono: "required",
					celular: "required",
					email: {
						required: true,
						email: true
					},
				},	
			} );
		}
	};
	contactForm();

});