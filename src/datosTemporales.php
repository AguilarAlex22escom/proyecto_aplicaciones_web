<?php
    // Importaciones
    include("conexion.php");
    // Variables auxiliares
    $escuela_ingresada;
    $discapacidad_seleccionada;
    $no_de_opcion;

    session_start();
    // Sesiones
    $codigo_postal_ingresado = $_SESSION["codigo_postal"] = isset($_POST["codigo_postal"])? $_POST["codigo_postal"]: null;
    $numero_celular_ingresado = $_SESSION["numero_celular"] = isset($_POST["numero_celular"])? $_POST["numero_celular"]: null;
    $correo_electronico_ingresado = $_SESSION["correo_electronico"] = isset($_POST["correo_electronico"])? $_POST["correo_electronico"]: null;
    $_SESSION["escuela_procedencia"] = isset($_POST["escuela_procedencia"])? $_POST["escuela_procedencia"]: null;
    $_SESSION["otra_escuela"] = isset($_POST["otra_escuela"])? $_POST["otra_escuela"]: null;
    $entidad_federativa_ingresada = $_SESSION["entidad_federativa"] = isset($_POST["entidad_federativa"])? $_POST["entidad_federativa"]: null;
    $promedio_ingresado = $_SESSION["promedio"] = isset($_POST["promedio"]) ? $_POST["promedio"]: null;
    $_SESSION["numero_de_opcion"] = isset($_POST["numero_de_opcion"])? $_POST["numero_de_opcion"]: null;
    $_SESSION["discapacidad"] = isset($_POST["discapacidad"])? $_POST["discapacidad"]: null;
    $_SESSION["discapacidades"] = isset($_POST["discapacidades"])? $_POST["discapacidades"]: null;

    switch($_SESSION["escuela_procedencia"]) { // Swtich para escuelas disponibles
        case "cecyt1":
            $escuela_ingresada = "CECyT 1: \"González Vázquez Vega\"";
            break;
        case "cecyt2":
            $escuela_ingresada = "CECyT 2: \"Miguel Bernard\"";
            break;
        case "cecyt3":
            $escuela_ingresada = "CECyT 3: \"Estanislao Ramírez Ruiz\"";
            break;
        case "cecyt4":
            $escuela_ingresada = "CECyT 4: \"Lázaro Cárdenas\"";
            break;
        case "cecyt5":
            $escuela_ingresada = "CECyT 5: \"Benito Juárez\"";
            break;
        case "cecyt6":
            $escuela_ingresada = "CECyT 6: \"Miguel Othón de Medizábal\"";
            break;
        case "cecyt7":
            $escuela_ingresada = "CECyT 7: \"Cuauhtémoc\"";
            break;
        case "cecyt8":
            $escuela_ingresada = "CECyT 8: \"Narciso Bassols García\"";
            break;
        case "cecyt9":
            $escuela_ingresada = "CECyT 9: \"Juan de Dios Bátiz\"";
            break;
        case "cecyt10":
            $escuela_ingresada = "CECyT 10: \"Carlos Vallejo Márquez\"";
            break;
        case "cecyt11":
            $escuela_ingresada = "CECyT 11: \"Wildrido Massieu Pérez\"";
            break;
        case "cecyt12":
            $escuela_ingresada = "CECyT 12: \"José María Morelos y Pavón\"";
            break;
        case "cecyt13":
            $escuela_ingresada = "CECyT 13: \"Ricardo Flores Magón\"";
            break;
        case "cecyt14":
            $escuela_ingresada = "CECyT 14: \"Luis Enrique Erro\"";
            break;
        case "cecyt15":
            $escuela_ingresada = "CECyT 15: \"Diódoro Antúnez Echegaray\"";
            break;
        case "cecyt16":
            $escuela_ingresada = "CECyT 16: \"Hidalgo\"";
            break;
        case "cecyt17":
            $escuela_ingresada = "CECyT 17: \"LEON, GUANAJUATO\"";
            break;
        case "cecyt18":
            $escuela_ingresada = "CECyT 18: \"ZACATECAS\"";
            break;
        case "cecyt19":
            $escuela_ingresada = "CECyT 19: \"Leona Vicario\"";
            break;
        case "cet1":
            $escuela_ingresada = "CET 1: \"Walter Cross Buchanan\"";
            break;
        case "otra":
            $escuela_ingresada = $_SESSION["otra_escuela"];
            break;
    }

    if($_SESSION["numero_de_opcion"] == "1") $no_de_opcion = "Primera opción";
    else if($_SESSION["numero_de_opcion"] == "2") $no_de_opcion = "Segunda opción";
    else if($_SESSION["numero_de_opcion"] == "3") $no_de_opcion = "Tercera opción";
    else if ($_SESSION["numero_de_opcion"] == "4") $no_de_opcion = "Cuarta opción";
    // Condicionales para la selección de discapacidad
    if($_SESSION["discapacidades"] == "auditiva") $discapacidad_seleccionada = "Auditiva";
    else if($_SESSION["discapacidades"] == "visual") $discapacidad_seleccionada = "Visual";
    else if($_SESSION["discapacidades"] == "motriz") $discapacidad_seleccionada = "Motríz";
    else if($_SESSION["discapacidades"] == "respiratoria") $discapacidad_seleccionada = "Respiratoria";
    else if($_SESSION["discapacidades"] == "congnitiva") $discapacidad_seleccionada = "Congnitiva";
    else if($_SESSION["discapacidades"] == "sensorial") $discapacidad_seleccionada = "Sensorial";
    else if($_SESSION["discapacidades"] == "multiple") $discapacidad_seleccionada = "Múltiple";
    else $discapacidad_seleccionada = "Ninguna";

    echo "<h3>Hola, papulince. Verifica que los datos que ingresaste sean correctos: </h3>";
    echo "<p><strong>Código postal: </strong>" . $codigo_postal_ingresado . "</p><br/>
            <p><strong>Número de celular: </strong>" . $numero_celular_ingresado . "</p><br/>
            <p><strong>Correo electrónico: </strong>" . $correo_electronico_ingresado . "</p><br/>
            <p><strong>Escuela de procedencia: </strong>" . $escuela_ingresada . "</p><br/>
            <p><strong>Entidad federativa de procedencia: </strong>" . $entidad_federativa_ingresada . "</p><br/>
            <p><strong>Promedio obtenido en el nivel medio superior: </strong>" . $promedio_ingresado . "</p><br/>
            <p><strong>Número de opción que fue ESCOM en la selección de universidades: </strong>" . $no_de_opcion . "</p><br/>
            <p><strong>Discapacidad: </strong>" . $discapacidad_seleccionada . "</p><br/>";
    echo "<p>Si los datos ingresados son correctos, da click en <strong>Enviar</strong> para enviar los datos y asignar tu horario para presentar examen.<p>
            <p>Si existe uno o más datos que ingresaste incorrectamente, da click en <strong>Modificar</strong> para volver al paso anterior y corregir los datos.<p>";
    echo "<input type='submit' name='Enviar'>
            <button name='regresar'><a href='/'>Modificar</a></button>";
    // Conexión a base de datos y envío de registro realizado
   

?>