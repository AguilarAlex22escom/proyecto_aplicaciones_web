
mostrarDatos = () => {
    let texto = '';
    let formulario = document.forms['id_registro']

    let escuelaProcedencia = formulario['escuela_procedencia']
    let entidadProcedencia = formulario['entidad_federativa']

    texto = 'Escuela de procedencia: ' + escuelaProcedencia.value + '<br>';
    document.getElementById('escuelaProcedencia').innerHTML = texto;
}
