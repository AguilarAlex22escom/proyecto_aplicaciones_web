// let discapacidades = ['Auditiva', 'Visual', 'Motríz', 'Respiratoria', 'Cognitiva', 'Sensorial', 'Multiple']
/* recorrerDiscapacidades = () => {
    for(let discapacidad of discapacidades) {
        document.innerHTML = `<option>${discapacidad}</option>`;
    }
} */

// Patrones
const patronCodigoPostal = /[0-9][1-9][0-9]{3}/
const patronPromedio = /[0-9]\.[0-9][0-9]/

// Funciones
seleccionarEscuela = () => {
    let escuelaDeProcedencia = document.getElementById('escuelaDeProcedencia')
    let escuelaSeleccionada = escuelaDeProcedencia.value;

    if(escuelaSeleccionada == 'otra') { // En caso de que el estudiante seleccione 'otra' en la escuela de procedencia.
        document.getElementById('opcionSeleccionada').innerHTML = `
            <br><label for="escuelaSeleccionada">Escuela de procedencia: </label>
            <input id="otraEscuela" type="text" placeholder="Escuela de procedencia" required /><br>`;
    }
    else {
        document.getElementById('opcionSeleccionada').innerText = ``;
    }
}

seleccionarDiscapacidad = () => {
    let conDiscapacidad = document.getElementById('conDiscapacidad')

    if(conDiscapacidad.checked) {
        document.getElementById('siSeleccionado').innerHTML = `
        <label for="siSeleccionado">En caso de que haya dado 'sí', seleccione la discapacidad que tiene:</label><br>
        <select name="discapacidades" required>
            <option value="" disabled selected>Seleccione una opción</option>
            <option value="auditiva">Auditiva</option>
            <option value="visual">Visual</option>
            <option value="motriz">Motríz</option>
            <option value="respiratoria">Respiratoria</option>
            <option value="congnitiva">Cognitiva</option>
            <option value="sensorial">Sensorial</option>
            <option value="multiple">Múltiple</option>
        </select>`
    }
    if(sinDiscapacidad.checked) {
        document.getElementById('siSeleccionado').innerText = ``;
    }
}

validarCodigoPostal = () => {
    let codigoPostalIngresado = document.getElementById('codigoPostal').value;
    // let lectorCodigoPostal = codigoPostalIngresado.match(patronCodigoPostal)
    let validacionCodigoPostal = patronCodigoPostal.test(codigoPostalIngresado)

    if(validacionCodigoPostal == false) {
        document.getElementById('codigoPostalEnIngreso').innerHTML = `<p>Ingresa un valor de 5 dígitos valido (del 01000 al 99999) </p>`;   
    }
    else if(validacionCodigoPostal == true) {
        document.getElementById('codigoPostalEnIngreso').innerHTML = ``;
    }
}