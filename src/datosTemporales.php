<?php
    session_start();
    // Sesiones
    $escuela_seleccionada = $_SESSION['escuela_procedencia'];
    $escuela_de_procedencia = isset($escuela_seleccionada)? $_SESSION['escuela_procedencia']: null;

    echo "<p>$escuela_de_procedencia</p>";

?>