<?php

    $conexion = mysqli_connect("localhost", "root", "", "escuela") or
        die("Problemas con la conexión");

    #EJECUTAR CONSULTA EN LA BD
    mysqli_query($conexion, "INSERT INTO alumnos(nombre,mail,codigocurso) VALUES 
                       ('$_REQUEST[nombre]','$_REQUEST[mail]',$_REQUEST[codigocurso])")
        or die("Problemas en el select" . mysqli_error($conexion));

    mysqli_close($conexion);

    echo "El alumno fue dado de alta.";
?>