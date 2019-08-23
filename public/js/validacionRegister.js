window.addEventListener('load', function(){
	//console.log('hola');
	var elFormulario = document.querySelector('.formulario');
	//console.log(elFormulario);
	var losCampos = Array.from(elFormulario.elements).filter(function (unCampo) {
		return unCampo.name != "avatar";
	});
	// console.log(losCampos);

	losCampos.pop();
	losCampos.pop();
	losCampos.pop();
	losCampos.pop();
	console.log(losCampos);

	var regexEmail = /\S+@\S+\.\S+/;
	var errores = {};
	var contrasena = null;

	losCampos.forEach(function (unCampo) {
	var divError = null;
	if (unCampo.name !== 'null') {
			divError = unCampo.nextElementSibling;
		}

		unCampo.addEventListener('blur', function () {
			var valorDelCampo = unCampo.value.trim();

			console.log(this);

			if (valorDelCampo === '') {
				this.classList.add('invalid-feedback');
				divError.style.display = 'block';
				divError.innerText = `Este campo es obligatorio`;

				errores[this.name] = true;
			}
			else {
				this.classList.remove('invalid-feedback');
				divError.style.display = 'none';
				divError.innerText = '';
				delete errores[this.name];

				if (this.name === 'email') {

					if (!regexEmail.test(valorDelCampo)) {
						this.classList.add('invalid-feedback');
						divError.style.display = 'block';
						divError.innerText = `Ingresá un email válido`;

						errores[this.name] = true;
					}
				}
				if (this.name === 'username' ) {
					if ( this.value.length < 8 ) {
						this.classList.add('invalid-feedback');
						divError.style.display = 'block';
						divError.innerText = `El usuario debe contener como mínimo 8 caracteres`;
						errores[this.name] = true;
					}
				}
	      if (this.name === 'password') {
					if ( this.value.length < 8 ) {
						this.classList.add('invalid-feedback');
						divError.style.display = 'block';
						divError.innerText = `La contraseña debe contener como mínimo 8 caracteres`;
						errores[this.name] = true;
					}
					contrasena = this.value;
				}

				if (this.name === 'password_confirmation' && contrasena !== null) {
					if (this.value !== contrasena) {
							this.classList.add('invalid-feedback');
							divError.style.display = 'block';
							divError.innerText = `Las contraseñas no coinciden`;
							//console.log(this.value);
					}

				}
				if(this.name === 'boton-avatar') {

					// console.log('hola')
					// var avatar = document.querySelector('input[name="avatar"]');
					// console.log(avatar.value);
				}
}

//console.log(contrasena);


	//		console.log(errores);
		});

	});


	elFormulario.addEventListener('submit', function (event) {
		losCampos.forEach(function (unCampo) {
			var valorFinalDelCampo = unCampo.value.trim();

			if (valorFinalDelCampo === '') {
				errores[unCampo.name] = true;
			}
		});

		if (Object.keys(errores).length > 0) {
			alert('Campos vacíos');
			//console.log(errores);
			event.preventDefault();
		}
	})

})
