<?php
    function conectarConBD() {
        $conexion = mysqli_connect("localhost", "root", "", "proyecto_web");
    }
    $ingreso_datos_sql = "INSERT INTO alumno (
        codigoPostal, numeroCelular, correoElectronico, escuelaProcedencia, entidadFederativa, promedio, numeroDeOpcion, discapacidad) VALUES (
        '$codigo_postal_ingresado', $numero_celular_ingresado, '$correo_electronico_ingresado', '$escuela_ingresada', '$entidad_federativa_ingresada', $promedio_ingresado, '$no_de_opcion', '$discapacidad_seleccionada')";
    $envio = mysqli_query($conexion, $ingreso_datos_sql);
?>